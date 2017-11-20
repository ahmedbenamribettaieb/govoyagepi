<?php

namespace GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('regno')->add('model')->add('duration')
            ->add('rate')->add('type')->add('status')->add('alvVoFk')->add('clientVoFk')
            ->setMethod('GET')->add('enregistrer',SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'GoVoyage_bundle_voiture_form';
    }
}
