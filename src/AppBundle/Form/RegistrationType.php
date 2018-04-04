<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        var_dump('$builder');
        $builder
            ->add('prenom')
            ->add('$codePostal')
            ->add('ville');

    }

    public function getParent()
    {
        var_dump('$builder');
        return 'fos_user_registration';
    }

    public function getName()
    {
        var_dump('$builder');
        return 'app_user_registration';
    }
}