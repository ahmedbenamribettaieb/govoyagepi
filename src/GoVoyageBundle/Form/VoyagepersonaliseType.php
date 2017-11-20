<?php

namespace GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoyagepersonaliseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('villeDepart')->add('villeArrive')->add('dateDepart')->add('dateArrive')->add('nbrParticipant')->add('hotelFk')->add('clientVpFk')->add('event1Fk')->add('idGuideFk');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageBundle\Entity\Voyagepersonalise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'govoyagebundle_voyagepersonalise';
    }


}
