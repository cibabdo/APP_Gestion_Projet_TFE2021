<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('comment', TextareaType::class)
        ->add('document', FileType::class, [           
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
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
                ])
            ],
        ])   
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}
