<?php

namespace App\Controller;

use App\Entity\Crypto;
use App\Entity\User;
use App\Entity\Wallet;
use App\Form\CreditType;
use App\Form\RegistrationType;
use App\Repository\CryptoRepository;
use App\Repository\UserRepository;
use App\Repository\TransactionRepository;
use App\Repository\WalletRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    /**
     * @Route("/userShow{id<\d+>}", name="user_show")
     * @Security("is_granted('ROLE_USER')")
     */
    public function userShow(User $user)
    {
        if (!$user) {
            throw $this->createNotFoundException(
                "L'utilisateur recherché est introuvable."
            );
        }
            return $this->render('user/show.html.twig',[
                'user'=>$user,
            ]);
    }//end userShow
    

    /**
     * @Route("/increaseSolde{id<\d+>}", name="increase_solde")
     * @Security("is_granted('ROLE_USER')")
     */
    public function increaseSolde(ObjectManager $manager, Request $request,  User $user)
    {
        if (!$user) {
            throw $this->createNotFoundException(
                "L'utilisateur recherché est introuvable."
            );
        }

        $userSolde = $user->getSolde();

        $creditForm = $this->createForm(CreditType::class, $user);
        $creditForm->handleRequest($request);
        if($creditForm->isSubmitted() && $creditForm->isValid()){
            //$neoCredit = $request->get('creditSolde');
            //user->setSolde($userSolde + $neoCredit);
            $manager->flush();
            $this->addFlash('success', "Votre solde a bien été crédité. La somme ajoutée a été prélevée sur votre compte banquaire.");
            return $this->redirectToRoute('crypto_home', [
            ]);
        }
        return $this->render('user/credit.html.twig',[
            'creditForm' => $creditForm->createView(),
        ]);
    }//end increaseSolde


    /**
     * @Route("/userCreate", name="user_create")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function userCreate(CryptoRepository $repo, ObjectManager $manager, Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user
                ->setPassword($hash)
                ->setSalt('AAAAAAAA')
                ->setSolde(0)
                ->setRoles(['ROLE_USER'])
                ;
            $manager->persist($user);
            $manager->flush();
            
            //create one empty wallet for each crypto
            $cryptos = $repo->findAll();
            foreach ($cryptos as $crypto) {
                $wallet = new Wallet();
                $wallet
                    ->setAmount(0)
                    ->setAmountCrypto(0)
                    ->setCrypto($crypto)
                    ->setUser($user)
                    ;
                $manager->persist($wallet);
            }

            $manager->flush();

            $username = $user->getUsername();
            $this->addFlash('success', "L'utilisateur $username a bien été créé.");
            return $this->redirectToRoute('user_show', [
                'id' => $user->getId(),
            ]);
        }
        
        return $this->render('user/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }//end userCreate


    /**
     * @Route("/userEdit{id<\d+>}", name="user_edit")
     * @Security("is_granted('ROLE_USER')")
     */
    public function userEdit(ObjectManager $manager, Request $request, User $user, UserPasswordEncoderInterface $encoder)
    {
        if (!$user) {
            throw $this->createNotFoundException(
                "L'utilisateur recherché est introuvable."
            );
        }
        $username = $user->getUsername();
        
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->flush();
            
            $this->addFlash('success', "L'utilisateur $username a été modifié avec succès.");

            return $this->redirectToRoute('user_show', [
                'id' => $user->getId(),
            ]);
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'username' => $username,
            'id' => $user->getId(),
        ]);
    }//end userEdit
    


    /**
     * @Route("/userDelete{id<\d+>}", name="user_delete")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function userDelete(ObjectManager $manager, TransactionRepository $repo, User $user)
    {
        if(empty($user)){

            $this->addFlash('error', "Impossible de supprimer l'utilisateur.");

        }else{
            $username = $user->getUsername();
            //storage of the user transactions in the DB with user_id = Null
            $transactions = $repo->findBy(['user' => $user]);
            
            foreach ($transactions as $transaction){
                
                $transaction ->setUser(null);
                $manager->persist($transaction);
            }

            $manager->remove($user);
            //$wallets cascading remove
            $manager->flush();

            $this->addFlash('success', "L'utilisateur $username a été supprimé avec succès. Toutefois ses transactions ont été conservées en base de données avec un identifiant NULL.");
        }
        return $this->redirectToRoute('admin_users',[
        ]);
    }//end userDelete
}//end class
