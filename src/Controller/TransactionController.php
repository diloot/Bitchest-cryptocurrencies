<?php

namespace App\Controller;

use App\Entity\Crypto;
use App\Entity\Transaction;
use App\Entity\User;
use App\Entity\Wallet;
use App\Repository\CryptoRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use App\Repository\WalletRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class TransactionController extends AbstractController
{
    /**
     * @Route("/adminTransactionsShow", name="admin_transactions_show")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function adminTransactionsShow(TransactionRepository $repo)
    {
        $transactions = $repo->findByDateDesc();

        return $this->render('admin/adminTransactions.html.twig', [
            'transactions' => $transactions,
        ]);

    }//end adminTransactionsShow


    /**
     * @Route("/transactionsShow{id<\d+>}", name="user_transactions_show")
     * @Security("is_granted('ROLE_USER')")
     */
    public function transactionsShow(User $user, CryptoRepository $cRepo, TransactionRepository $tRepo, WalletRepository $wRepo)
    {
        $cryptos = $cRepo->findAll();
        //test : all transactions of user without order :
        //$transactions = $user->getTransactions();

        $transactions = $tRepo->findByUserCryptos($user);

        //$wallets = $wRepo->findBy(['user' => $user],['crypto' => 'asc']);
        
        //Récupérer les cryptos de app.user. Fonction présente dans TransactionsRepository : 
        $wallets = $wRepo->findByUserCryptos($user);

        
        return $this->render('wallet/userTransactions.html.twig', [
            'cryptos' => $cryptos,
            'transactions' => $transactions,
            'wallets'=> $wallets,
            'user'=> $user
        ]);
        
    }//end userTransactionShow



    /**
     * @Route("/cryptoBuy", name="crypto_buy")
     */
    public function cryptoBuy(Request $request, ObjectManager $manager, CryptoRepository $cRepo, UserRepository $uRepo, WalletRepository $wRepo)
    {       
        $userId = $request->get('user');
        $user = $uRepo->find($userId);
        $credit = $user->getSolde();
        
        $cryptoId = $request->get('crypto');
        $crypto = $cRepo->find($cryptoId);
        
        $type = $request->get('type');

        $amount = $request->get('amount');
        if( $amount <= 0 || $amount > $credit){

            $this->addFlash('warning', "Achat impossible : vous devez posséder un solde suffisant.");
            return $this->redirectToRoute('crypto_one', [
                    'id' => $cryptoId,
                    ]);
        }
        
        //new transaction         
        $amountCrypto = $request->get('amount_crypto');
        $date = new \DateTime('now');
        
        $transaction = new transaction();
        $transaction    
            ->setUser($user)
            ->setCrypto($crypto)
            ->setType($type)
            ->setAmountCrypto($amountCrypto)
            ->setDate($date)
            ->setAmount($amount)
            ;
        $manager->persist($transaction);
        
        //wallet update
        $wallet = $wRepo->findOneBy(['user'=>$user, 'crypto'=>$crypto]);

        if(!$wallet){
            $this->addFlash('warning', "Le portefeuille n'a pu être trouvé.");

            return $this->redirectToRoute('crypto_one', [
                'id' => $cryptoId,
                ]);
        } else {
            //buy
            $walletAmount = $wallet->getAmount();
            $walletAmountCrypto = $wallet->getAmountCrypto();

            $user ->setSolde($credit - $amount);
            $wallet 
                ->setAmount($walletAmount + $amount)
                ->setAmountCrypto($walletAmountCrypto + $amountCrypto)
                ;
            }
        
        $manager->flush();
        
        $this->addFlash('success', "Votre achat a bien été prise en compte. Votre compte Bitchest à été débité de $amount euros.");
            
        $cryptos = $cRepo->findAll();
        return $this->redirectToRoute('user_transactions_show', [
            'cryptos'=> $cryptos,
            'id'=> $userId,
        ]);
    }//end cryptoBuy


    /**
     * @Route("/cryptoSell", name="crypto_sell")
     */
    public function cryptoSell(Request $request, ObjectManager $manager, CryptoRepository $cRepo, UserRepository $uRepo, WalletRepository $wRepo)
    {       
        $type = $request->get('type');

        $userId = $request->get('user');
        $user = $uRepo->find($userId);
        $credit = $user->getSolde();
        
        $cryptoId = $request->get('crypto');
        $crypto = $cRepo->find($cryptoId);
        
        $wallet = $wRepo->findOneBy(['user'=>$user, 'crypto'=>$crypto]);

        if(!$wallet){
            $this->addFlash('warning', "Le portefeuille n'a pu être trouvé.");

            return $this->redirectToRoute('crypto_one', [
                'id' => $cryptoId,
                ]);
        }
    
        $amountCrypto = $wallet->getAmountCrypto();
        
        $amount = $request->get('amount');
          
        if( $amount <= 0){   
            $this->addFlash('warning', "Vente impossible.");
            
            return $this->redirectToRoute('crypto_one', [
                'id' => $cryptoId,
                ]);
        }
        //new transaction   
        $date = new \DateTime('now');
        
        $transaction = new transaction();
        $transaction    
            ->setUser($user)
            ->setCrypto($crypto)
            ->setType($type)
            ->setAmountCrypto($amountCrypto)
            ->setDate($date)
            ->setAmount($amount)
            ;
        $manager->persist($transaction);
        
        //wallet update
        $user ->setSolde($credit + $amount);
        $wallet 
            ->setAmount(0)
            ->setAmountCrypto(0)
            ;
        $manager->flush();
            
        $this->addFlash('success', "Votre vente a bien été prise en compte. Votre compte Bitchest à été crédité de $amount euros.");
            
        $cryptos = $cRepo->findAll();
        return $this->redirectToRoute('user_transactions_show', [
            'cryptos'=> $cryptos,
            'id'=> $userId,
        ]);
    }//end cryptoSell
}//end class