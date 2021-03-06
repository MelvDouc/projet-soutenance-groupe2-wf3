<?php

namespace App\Form;

use App\Entity\Produits;
use App\Entity\Categories;
use App\Entity\SousCategories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ProduitType extends AbstractType
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
            ->add('description', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex.: Un ballon de football en mousse parfait pour l\'apprentissage...'
                ]
            ])
            ->add('id_categories', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'nom',
                'label' => 'Catégorie',
                'required' => true,
            ])
            ->add('id_sous_categories', EntityType::class, [
                'class' => SousCategories::class,
                'choice_label' => 'nom',
                'label' => 'Sous Catégorie',
                'required' => true,
            ])
            ->add('img', FileType::class, [
                'help' => 'png, jpg ou jpeg - 1 Mo maximum',
                'required' => true,
                'mapped' => false,
                'label' => 'Image',
            ])
            ->add('prix', MoneyType::class, [
                'required' => true,
                'label' => 'Prix (€)',
                'attr' => [
                    'placeholder' => 'Ex.: 129.99',
                    'min' => 0
                ]
            ])
            ->add('valider', SubmitType::class, ['label' => 'Valider'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
