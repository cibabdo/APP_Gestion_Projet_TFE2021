<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $isPasswordRequired = true;
        $user = $builder->getData();
        if ($user->getId())  $isPasswordRequired = false; // no mandatory when user is updated

        $builder
            ->add('email')
            ->add('username')            
            ->add('password', PasswordType::class, [
                    'required' => $isPasswordRequired
            ])
            ->add('password_confirm', PasswordType::class, [
                'required' => $isPasswordRequired
            ])
            ->add('language', ChoiceType::class, [
                'choices'  => [
                    'Francais' => 'FR',                    
                    'Anglais' => 'EN'
                ]
            ])                       
            ->add('roles', ChoiceType::class, [
                'required' => true,
                'multiple' => true,                
                'choices'  => [
                    'Administrateur' => 'ROLE_ADMIN',      
                    'Utilisateur' => 'ROLE_USER',                                                            
                    "Interne" => "ROLE_INTERNAL",
                    "Externe" => "ROLE_EXTERNAL",
                    "Architecte" => "ROLE_ARCHITECT",
                    "Conducteur" => "ROLE_SUPERVISOR",
                    "Ingénieur" => "ROLE_ENGINEER"                    
                ]
            ])            
        ;      
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
