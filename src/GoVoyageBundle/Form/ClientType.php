<?php

namespace GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username')->add('email')->add('password')->add('nom')->add('prenom')->add('numtel')->add('adresse')->add('datenaissence')->add('image')->add('cin')->add('datenaissence');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageBundle\Entity\Users'
        ));
    }

    public function getBlockPrefix()
    {
        return 'govoyagebundle_users';
    }
}
