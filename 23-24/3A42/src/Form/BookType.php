<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ref')
            ->add('title')
          #  ->add('published')
            ->add('datePublication')
            ->add('author')
            ->add('category', ChoiceType::class, [
                'choices' => [
                    'Science Fiction' => 'Science Fiction',
                    'Mystery' => 'Mystery',
                    'Romance' => 'Romance',
                ],
            ])
           /* ->add('author', EntityType::class, [
                'class' => 'App\Entity\Author', // Replace with the actual namespace of your Author entity
                'choice_label' => 'email', // Assuming Author entity has a method getFullName() that returns the author's full name
                'placeholder' => 'Select an author', // Optional, adds an empty option at the top
                'required' => true, // Set to true if the author selection is mandatory

            ])*/
           ->add('Submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
