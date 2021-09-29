<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\EngineeringOffice;
use App\Entity\PersonEngineering;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PersonEngineeringType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname')
            ->add('firstname')
            ->add('phone')
            ->add('gsm')
            ->add('email')
            ->add('language', ChoiceType::class, [
                'choices'  => [
                    'Francais' => 'FR',                    
                    'Anglais' => 'EN'
                ],
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'choice_label' => "name",
                'required' => false              
            ])
            ->add('engineeringOffice', EntityType::class, [
                'class' => EngineeringOffice::class,
                'choice_label' => "name",
                'required' => false
            ])            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PersonEngineering::class,
        ]);
    }
}
