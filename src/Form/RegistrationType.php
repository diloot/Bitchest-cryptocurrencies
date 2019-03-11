<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label'=> "Nom d'utilisateur :",
            ])
            ->add('password', PasswordType::class, [
                'label'=> "Mot de passe :",
            ])
            ->add('confirm_password', PasswordType::class, [
                'label'=> "Confirmation du mot de passe :",
            ])
            ->add('email', EmailType::class, [
                'label'=> "Email :",
                'attr'=>[
                    'pattern'=>"^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$",
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'=> "Prénom :",
            ])
            ->add('lastname', TextType::class, [
                'label'=> "Nom :",
            ])
            ->add('address', TextType::class, [
                'label'=> "Adresse :",
            ])
            ->add('cp', NumberType::class, [
                'label'=> "Code Postal :",
                'attr'=>[
                    'pattern'=>"[0-9]{5}",
                ]    
            ])
            ->add('town', TextType::class, [
                'label'=> "Ville :",
            ])
            ->add('phone', NumberType::class, [
                'label'=> "Téléphone +33(0) :",
                'attr'=>[
                    'pattern'=>"[1-9]+[0-9]{8}",
                ]
            ])
            //->add('salt')
            //->add('roles')
            //->add('solde')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
