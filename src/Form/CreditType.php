<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('solde', NumberType::class, [
                //'label' => "Créditer le compte en euros de :",
                'label' => "Nouveau solde :",
                'attr'  => [
                    //'placeholder' => "Quantité d'euros à prélever sur votre compte banquaire",
                    'placeholder' => "Nouveau montant désiré",
                    'value' => ''
                ]
            ])
            //->add('save', SubmitType::class, [
            //    'attr' => ['value' => 'Créditer']
            //])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
