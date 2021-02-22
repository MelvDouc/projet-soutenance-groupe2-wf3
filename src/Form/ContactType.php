<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', ChoiceType::class, [
                'choices' => [
                    'required' => true,
                    '- choix -' => '',
                    'Madame' => 'Madame',
                    'Monsieur' => 'Monsieur',  
                ]
            ])
            ->add('nom', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Votre nom'
                ]
            ])
            ->add('prenom', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Votre prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Votre adresse email'
                ]
            ])
            ->add('motif', ChoiceType::class, [
                'required' => true,
                'choices' => [
                    '- choix -' => '',
                    'La taille n\'est pas bonne' => 'taille',
                    'Ce n\'est pas ce que j\'ai commandé' => 'mauvaise commande',
                    'Je souhaite postuler' => 'candidature',
                    'Demande de remboursement' => 'Remboursement'
                ],
                'attr' => [
                    'minlength' => 50,
                    'maxlength' => 1000
                ]
            ])
            ->add('numerodecommande', IntegerType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Exemple: 85479632154'
                ],
                'label' => 'Numéro de commande',
                'help' => 'il se trouve dans votre bon de commande qui vous a été envoyé par email'
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Votre message',
                    'size' => '100px',
                    'max' => 2000
                ],
                'help' => '2000 caractères maximum'
            ])
            ->add('envoyer', SubmitType::class);
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
