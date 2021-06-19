<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\Employee;
use App\Entity\Department;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('department', EntityType::class, [
                'class' => Department::class,
                'choice_label' => "name"              
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'choice_label' => "name"              
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
