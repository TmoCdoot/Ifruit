<?php

namespace App\Form;

use App\Entity\IsuperOrdiProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IsuperOrdiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('widthScreen')
            ->add('heightScreen')
            ->add('reference')
            ->add('processor')
            ->add('ram')
            ->add('storage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IsuperOrdiProduct::class,
        ]);
    }
}
