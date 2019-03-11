<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_users")
     */
    public function adminUsers(UserRepository $repo)
    {
        $users = $repo->findAll();
        return $this->render('admin/adminUsers.html.twig', [
            'users' => $users,
        ]);
    }//end adminUsers


    /**
     * @Route("/admin/{id<\d+>}", name="admin_roles")
     */
    public function adminRoles(ObjectManager $manager, User $user, UserRepository $repo)
    {
        $users = $repo->findAll();

        if($user->getRoles() === ['ROLE_USER']){
            $user->setRoles(['ROLE_ADMIN']);
        }else{
            $user->setRoles(['ROLE_USER']);
        }
        $manager->flush();
        
        return $this->redirectToRoute('admin_users', [
            'users' => $users,
        ]);
    }//end adminRoles
  
}//end class
