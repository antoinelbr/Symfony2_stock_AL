<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InventoryOperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //Product Form Builder
        $builder
            ->add('price', TextType::class)
            ->add('quantity', TextType::class)
            ->add('description', TextType::class)
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InventoryOperation',
        ));
    }
}
