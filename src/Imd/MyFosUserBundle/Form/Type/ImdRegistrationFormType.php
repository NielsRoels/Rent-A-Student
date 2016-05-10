<?php

namespace Imd\MyFosUserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ImdRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
            ->add('firstname', null, array('label' => 'Voornaam'))
            ->add('lastname', null, array('label' => 'Achternaam'))
            ->add('specialization', 'choice' , array('label' => 'Specialization', 'choices' => array('Development' => 'Development' , 'Design' => 'Design')))
            ->add('imdYear', null, array('label' => 'Imd Jaar','attr' => array('min' => 1, 'max' => 3) ))
            ->add('email', 'email', array('label' => 'Email'))
            ->add('website', null , array('label' => 'Website'))
            ->add('website', null , array('label' => 'Website'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array('label' => 'Wachtwoord'),
                'second_options' => array('label' => 'Herhaal wachtwoord'),
                'invalid_message' => 'Oops, wachtwoorden zijn niet gelijk!',
            ))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Imd\AppBundle\Entity\User',
            'cascade_validation' => true
        );
    }

    public function getName()
    {
        return 'imd_user_registration';
    }
}