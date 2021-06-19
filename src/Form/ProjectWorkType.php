<?php

namespace App\Form;

use App\Entity\Work;
use App\Entity\Company;
use App\Entity\ProjectWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comment', TextareaType::class)
            ->add('provisionalReceptionDate', DateType::class, ['format' => 'dd-MM-yyyy', 'required' => false])
            ->add('finalDeliveryDate', DateType::class, ['format' => 'dd-MM-yyyy', 'required' => false])
            ->add('vincotteReceptionDate', DateType::class, ['format' => 'dd-MM-yyyy', 'required' => false])
            ->add('company', EntityType::class, [
                'class' => Company::class,
                'choice_label' => "name"              
            ])          
            ->add('work', EntityType::class, [
                'class' => Work::class,
                'choice_label' => "name"              
            ])
            ->add('documents', FileType::class, [                
                'mapped' => false,
                'required' => false,
                'multiple' => true, 
                'constraints' => [
                    new All(new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'text/plain',
                            'image/png',
                            'image/bmp',
                            'image/jpeg',
                            'application/pdf',
                            'application/x-pdf',                        
                            'application/vnd.ms-excel',
                            'application/msword'
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader un document valide (txt, pdf, word, excel, bmp, png, jpeg)',
                    ]))
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProjectWork::class,
        ]);
    }
}
