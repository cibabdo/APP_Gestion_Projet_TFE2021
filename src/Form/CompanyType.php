<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\CompanyActivity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')         
            ->add('activity', EntityType::class, [
                'class' => CompanyActivity::class,
                'choice_label' => "name"              
            ])
            ->add('address')
            ->add('zipcode')
            ->add('location')
            ->add('country')
            ->add('phone')
            ->add('fax')
            ->add('email', EmailType::class)
            ->add('website');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
