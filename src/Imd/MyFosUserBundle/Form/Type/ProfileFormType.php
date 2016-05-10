<?php

/**
 * Overwrite from FosUserBundle/form/type/formtype.php
 */

namespace Imd\MyFosUserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->buildUserForm($builder, $options);
/*
        $builder->add('current_password', 'password', array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => new UserPassword(),
        ));*/
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'imd_myfosuser_profile_edit';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array('label' => 'Voornaam'))
            ->add('lastname', null, array('label' => 'Achternaam'))
            ->add('bio', null, array('label' => 'Bio'))
            ->add('specialization', 'choice' , array('label' => 'Specialization', 'choices' => array('Development' => 'Development' , 'Design' => 'Design')))
            ->add('imdYear', null, array('label' => 'Imd','attr' => array('min' => 1, 'max' => 3) ))
            ->add('dateOfBirth', 'date', array('label' => 'Geboorte datum','widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'dd-MM-yyyy','years' => range(date('Y')-70, date('Y')-10)))
            ->add('email', 'email', array('label' => 'Email'))
            -> add('website', null , array('label' => 'Website'))
        ;
    }
}
