<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 21/11/2017
 * Time: 20:44
 */

namespace GoVoyageBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class HotelType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('numTel')
            ->add('adresse')
            ->add('etoile')
            ->add('nb_chambre');

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageBundle\Entity\Users'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'govoyagebundle_hotel';
    }

}