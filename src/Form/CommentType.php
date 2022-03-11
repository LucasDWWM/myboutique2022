<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('CreatedAt')
            ->add('Content', TextareaType::class, [
                'label' => 'Votre commentaire'

            ])
            ->add('rating', IntegerType::class, [
                'label' => 'note /5',
                'attr' => [
                    'min' => 0,
                    'max' => 5,
                    'placeholder' => 'Votre note'

                ]

            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Poster le commentaire',
                'attr' => [
                    'class' => 'btn btn-primary col-12'
                ]
            ])
            //->add('product')
            //->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
