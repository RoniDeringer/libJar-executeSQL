<?php

namespace App\Form;

use App\Entity\Group;
use App\Form\TabelaForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tabelas', CollectionType::class, [
            'entry_type' => TabelaForm::class,
            'entry_options' => ['label' => false],
        ]);

        $builder->add('save', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-success'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Group::class,
        ]);
    }
}
