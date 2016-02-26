<?php
// J'override la construction du formulaire d'inscription pour y rajouter les champs dont j'ai besoin

namespace Intranet\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function getParent()
    {
        //return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        return 'fos_user_profile';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

