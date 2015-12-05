<?php

namespace Sipie\ProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario', 'entity', array('class' => 'SipieProBundle:Usuario', 'property' => 'rut', 'required' => true))
            ->add('paciente', 'entity', array('class' => 'SipieProBundle:Paciente', 'property' => 'rut', 'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sipie\ProBundle\Entity\Ficha'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sipie_probundle_ficha';
    }
}
