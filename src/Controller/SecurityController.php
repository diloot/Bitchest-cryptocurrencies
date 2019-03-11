<?php

namespace App\Controller;

use App\Entity\Crypto;
use App\Entity\User;
use App\Entity\Wallet;
use App\Form\RegistrationType;
use App\Repository\CryptoRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error, 
        ]);
    }//end login


    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout(){}


     /**
     * @Route("/login_check", name="login_check")
     */
    public function login_check(){}


    /**
     * @Route("/registration", name="security_registration")
     */
    public function registration(CryptoRepository $repo, ObjectManager $manager, Request $request, UserPasswordEncoderInterface $encoder)
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
            $this->addFlash('success', "$username, bienvenue chez Bitchest. Merci de votre confiance. Votre compte a bien été créé, et vous pouvez dorénavant acheter les cryptomonnaies que vous souhaitez après avoir crédité votre compte.");

            return $this->redirectToRoute('login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }//end registration   
}//end class
