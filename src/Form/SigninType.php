<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class SigninType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('username')
            ->add('password', PasswordType::class)
            ->add('password_confirm', PasswordType::class)           
            ->add('language', ChoiceType::class, [
                'choices'  => [
                    'Francais' => 'FR',                    
                    'Anglais' => 'EN'
                ],
            ])
            /*
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Administrateur' => 'ROLE_ADMIN',                    
                    'Interne' => 'ROLE_INTERNAL',
                    'Externe' => 'ROLE_EXTERNAL'
                ],
            ])       
            */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
