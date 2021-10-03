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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PlanningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('name')
            ->add('startDate', DateType::class, ['widget' => 'single_text' ])
            ->add('endDate', DateType::class, ['widget' => 'single_text' ])            
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
            ->add('comment', TextareaType::class, [
                'required' => $options['comment_required'],
                'mapped' => 'false'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planning::class,
            'comment_required' => false           
        ]);
    }
}
