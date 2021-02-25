<?php

namespace App\Form;

use App\Entity\SousCategories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SousCategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, [
            'required' => true,
            'label' => 'Nom',
            'attr' => [
                'placeholder' => 'Ex.: Ballon de football en mousse'
            ]
        ])
        ->add('img', FileType::class, [
            'help' => 'png, jpg ou jpeg - 1 Mo maximum',
            'required' => true,
            'mapped' => false,
            'label' => 'Image',
        ])
            ->add('valider', SubmitType::class, ['label' => 'Valider'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SousCategories::class,
        ]);
    }
}
