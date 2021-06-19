<?php

namespace App\Form;

use App\Entity\Site;
use App\Entity\Company;
use App\Entity\Project;
use App\Entity\Employee;
use App\Entity\PersonContact;
use App\Entity\EngineeringOffice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('title')
            ->add('year')
            ->add('description', TextareaType::class)
            ->add('workStartDate', DateType::class, ['format' => 'dd-MM-yyyy', 'html5' => false ])
            ->add('workEndDate', DateType::class, ['format' => 'dd-MM-yyyy'])
            ->add('startSituation', CheckboxType::class, ['required' => false])
            ->add('endSituation', CheckboxType::class, ['required' => false])
            ->add('state', ChoiceType::class, [
                'choices'  => [
                    'Pas commencé' => '0',                    
                    'Etude' => '1',
                    'En cours' => '2',
                    'Clôturé' => '3',
                    'Stand By' => '4',
                    'Reporté' => '5'
                ]
            ])        
            ->add('architect', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
           
            ->add('hvacEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            ->add('lowVoltageEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            ->add('medicalFluidEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
                 
            ->add('secondArchitect', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            ->add('site', EntityType::class, [
                'class' => Site::class,
                'choice_label' => "name",
                'required' => true              
            ])
            ->add('strongVoltageEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            ->add('supervisor', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            ->add('company', EntityType::class, [
                'class' => Company::class,
                'choice_label' => "name",
                'required' => false,
                'multiple' => true          
            ])
            ->add('sanitaryEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => "lastname",
                'required' => false              
            ])
            /* externes */
            ->add('externalArchitectureOffice', EntityType::class, [
                'class' => EngineeringOffice::class,
                'choice_label' => "name",
                'required' => false              
            ])                 
            ->add('externalEngineer', EntityType::class, [
                'class' => PersonContact::class,
                'required' => false,  
                'choice_label' => "firstname",
                'choices' => $builder->getData()->getEngineers()
            ])                 
            ->add('safetyCoordinator', EntityType::class, [
                'class' => PersonContact::class,
                'required' => false,  
                'choice_label' => "firstname",
                'choices' => $builder->getData()->getCoordinators()
            ])          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
