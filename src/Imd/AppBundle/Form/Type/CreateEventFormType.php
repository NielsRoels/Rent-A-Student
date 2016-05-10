<?php

// src/AppBundle/Form/Type/TaskType.php
namespace Imd\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CreateEventFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array('label' => 'Titel'))
            ->add('address', null, array('label' => 'Plaats'))
            ->add('bio', 'textarea', array('label' => 'Omschrijving'))
            ->add('startDate', 'datetime', array('label' => 'Start'))
            ->add('endDate', 'datetime', array('label' => 'Einde'))
            ->add('backgroundColor', null, array('label' => 'Kleur'))
            ->add('save', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imd\AppBundle\Entity\Event',
        ));
    }

    public function getName()
    {
        return 'event';
    }
}