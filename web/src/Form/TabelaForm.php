<?php

namespace App\Form;

use App\Entity\Tabela;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TabelaForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nome');

        $builder->add('colunas', CollectionType::class, [
        'entry_type' => ColunaForm::class,
        'entry_options' => ['label' => false],
        ]);

        $builder->add('newTable', SubmitType::class, [
        'attr' => ['class' => 'btn btn-primary'],
        'label' => 'Nova Tabela'
        ]);

        //     $builder->add('newTable', SubmitType::class, [
        //         'attr' => ['class' => 'btn btn-success'],  //setar com outro tipo Type
        //         'label' => 'Download JSON'
        //         ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        'data_class' => Tabela::class,
        ]);
    }
}
