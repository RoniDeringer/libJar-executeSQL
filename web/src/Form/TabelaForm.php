<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType; //error: use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class TabelaForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nome', TextType::class, ['label' => 'Nome da tabela: '])
        //formulario de coluna
        ->add('coluna', CollectionType::class, [
            'entry_type' => ColunaForm::class,
            'entry_options' => [
                'label' => false
            ],
            'by_reference' => false,
            'allow_add' => true,
            'allow_delete' => true
        ])
        // just a regular save button to persist the changes
        ->add('save', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-success'
            ]
        ]);
    }
}
