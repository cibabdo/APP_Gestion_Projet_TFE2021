<?php

namespace App\Form;

use App\Entity\Planning;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PlanningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('name')
            ->add('startDate', DateType::class, ['format' => 'dd-MM-yyyy'])
            ->add('endDate', DateType::class, ['format' => 'dd-MM-yyyy'])
            ->add('percentDone', RangeType::class, [                
                'attr' => [                          
                    'min' => 0,
                    'max' => 100
                ]])
            ->add('color', ColorType::class)     
            ->add('dependency', ChoiceType::class, [
                'choices'  => $builder->getData()->getDependencies(),
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planning::class,
        ]);
    }
}
