<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => true,
                'label' => 'Nom'
            ])
            ->add('prenom', TextType::class, [
                'required' => true,
                'label' => 'Prénom'
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'Adresse email'
            ])
            ->add('adresse', TextType::class, [
                'required' => true,
                'label' => 'Adresse'
            ])
            ->add('codepostal', IntegerType::class, [
                'required' => true,
                'label' => 'Code Postal'
            ])
            ->add('ville', TextType::class, [
                'required' => true,
                'label' => 'Ville'
            ])
            ->add('numerodecarte', IntegerType::class, [
                'required' => true,
                'label' => 'Numéro de carte'
            ])
            ->add('dateexpirationcarte', IntegerType::class, [
                'required' => true,
                'label' => 'Date d\'expiration'
            ])
            ->add('codecvv', IntegerType::class, [
                'required' => true,
                'label' => 'Code CVV (code à 3 chiffres qui figure à l\'arrière de votre carte)'
            ])
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
