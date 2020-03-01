<?php

namespace App\Form;

use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoriesType extends AbstractType
{
    private function getConfig($label, $place,$rool)
    {
        return  [
            'label' => $label, 
            'required'    => $rool,
            'attr' => [
                'placeholder' => $place
            ]
        ];
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle',TextType::class,$this->getConfig("Type de Service (*) :","Tapez Votre type de service ",true))
            ->add('observation',TextareaType::class,$this->getConfig("Désignation   :","Tapez Votre Désignation ",false))
            ->add('date',DateType::class,$this->getConfig("Date de création    :","Tapez Votre date de création ",false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
