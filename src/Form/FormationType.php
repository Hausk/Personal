<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Class FormationType
 * @package App\Form
 */
class FormationType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("name", TextType::class, [
                "label" => "Nom de la compétence :",
                "attr" => [
                    "placeholder" => "Entrez le nom de la compétence..."
                ]
            ])
            ->add("level", RangeType::class, [
                "label" => "Votre niveau :",
                "attr" => [
                    "min" => 1,
                    "max" => 10
                ]
            ])
        ;
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Formation::class);
    }
}