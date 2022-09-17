<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType; //error: use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

class DatabaseForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nome', TextType::class, ['label' => 'Nome do Banco'])
        ->add('Salvar', SubmitType::class);
    }
}
