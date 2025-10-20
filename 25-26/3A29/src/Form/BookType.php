<?php

namespace App\Form;

use App\Entity\Author;
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
            ->add('price')
            ->add('description')
            ->add('publicationDate')
            ->add('category', ChoiceType::class, [
                'choices' => [
                    'Science' => 'science',
                    'Fiction' => 'fiction',
                    'Histoire' => 'histoire',
                    'Philosophie' => 'philosophie',
                ],
            ])
           ->add('author')
           ->add('submit',SubmitType::class)
           //
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
