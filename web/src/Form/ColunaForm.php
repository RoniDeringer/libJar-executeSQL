<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType; //error: use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ColunaForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomeCol', TextType::class)
        ->add('tipo', TextType::class);
    }
}
