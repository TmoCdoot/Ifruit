<?php

namespace App\Form;

use App\Entity\IbigoProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class IbigoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
            ->add('description', TextareaType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
            ->add('price', MoneyType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
            ->add('widthScreen', NumberType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
            ->add('heightScreen', NumberType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
            ->add('reference', TextType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IbigoProduct::class,
        ]);
    }
}
