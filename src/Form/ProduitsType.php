<?php

namespace App\Form;

use App\Entity\Produits;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProduitsType extends AbstractType
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
            ->add('libelle',TextType::class,$this->getConfig("Nom de Produit (*) :","Tapez Votre produit ",true))
            ->add('desription',TextareaType::class,$this->getConfig("desription   :","Tapez la desription de produit ",false))
            ->add('image')
            ->add('date',DateType::class,$this->getConfig("Date de création    :","Tapez Votre date de création ",false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
