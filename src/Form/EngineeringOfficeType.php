<?php

namespace App\Form;

use App\Entity\EngineeringOffice;
use App\Entity\EngineeringOfficeSort;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EngineeringOfficeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('zipcode')
            ->add('location')
            ->add('country')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('website')
            ->add('sort', EntityType::class, [
                'class' => EngineeringOfficeSort::class,
                'choice_label' => "name"              
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EngineeringOffice::class,
        ]);
    }
}
