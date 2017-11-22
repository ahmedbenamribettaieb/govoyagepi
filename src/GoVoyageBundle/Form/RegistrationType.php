<?php

namespace GoVoyageBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        #$builder->add('nom');
        $builder->add('prenom');
        $builder
            ->add('roles', CollectionType::class, array(
                'entry_type' => ChoiceType::class,
                'entry_options' => array(
                    'choices' => array(

                        'ROLE_HOTEL' => 'ROLE_HOTEL',
                        'ROLE_AGENCE' => 'ROLE_AGENCE',
                        'ROLE_GUIDE' => 'ROLE_GUIDE',
                        'ROLE_CLIENT' => 'ROLE_CLIENT',
                        'ROLE_AGENCE_VOITURE' => 'ROLE_AGENCE_VOITURE'
                        )
                    )
                )
            )
        ;


    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()

    {
        return 'app_user_registration';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }

}