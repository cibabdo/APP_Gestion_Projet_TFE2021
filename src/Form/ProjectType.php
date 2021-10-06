<?php

namespace App\Form;

use App\Entity\Site;
use App\Entity\Company;
use App\Entity\Project;
use App\Entity\Employee;
use App\Entity\EngineeringOffice;
use App\Entity\PersonEngineering;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('site', EntityType::class, [
                'class' => Site::class,
                'choice_label' => "name",
                'required' => true              
            ])
            ->add('reference')
            ->add('title')
            ->add('year')
            ->add('description', TextareaType::class)
            ->add('workStartDate', DateType::class, ['widget' => 'single_text' ])
            ->add('workEndDate', DateType::class, ['widget' => 'single_text' ])
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

            /* intervenant */    

            ->add('company', EntityType::class, [
                'class' => Company::class,
                'choice_label' => "name",
                'required' => false,
                'multiple' => true          
            ])
            ->add('engineeringOffice', EntityType::class, [
                'class' => EngineeringOffice::class,
                'choice_label' => "name",
                'required' => false,
                'multiple' => true          
            ])
            
            /* interne */
            
            ->add('architect', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },      
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 2');
                },                          
                'required' => false,                   
            ])
          
            ->add('hvacEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 8');
                }, 
                'required' => false              
            ])
            ->add('lowVoltageEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 12');
                }, 
                'required' => false              
            ])
            ->add('medicalFluidEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 14');
                }, 
                'required' => false              
            ])
                 
            ->add('secondArchitect', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 2');
                }, 
                'required' => false              
            ])           
            ->add('strongVoltageEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 13');
                }, 
                'required' => false              
            ])
            ->add('supervisor', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 1');
                }, 
                'required' => false              
            ])           
            ->add('sanitaryEngineer', EntityType::class, [
                'class' => Employee::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 15');
                }, 
                'required' => false              
            ])
            
            /* externes */
            
            ->add('externalArchitectureOffice', EntityType::class, [
                'class' => PersonEngineering::class,
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 2');
                }, 
                'required' => false              
            ])                 
            ->add('externalEngineer', EntityType::class, [
                'class' => PersonEngineering::class,                
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 16');
                }, 
                'required' => false
            ])                 
            ->add('safetyCoordinator', EntityType::class, [
                'class' => PersonEngineering::class,                
                'choice_label' => function ($person) {
                    return $person->getFirstname() . ' ' . $person->getLastname();
                }, 
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.role = 17');
                },                
                'required' => false
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
