<?php

namespace Sipie\ProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut','text', array('label' => 'Rut'))
            ->add('password','repeated', array(
				'type' => 'password',
				'invalid_message' => 'Las contraseñas deben coincidir.',
				'options' => array('attr' => array('class' => 'password-field')),
				'required' => true,
				'first_options'  => array('label' => 'Contraseña'),
				'second_options' => array('label' => 'Confirmar Contraseña'),
			))
            ->add('email','email', array('label' => 'E-mail'))
            ->add('isActive','checkbox', array('label' => 'Activo','required' => false,))
            ->add('nombres','text', array('label' => 'Nombres'))
            ->add('apellidos','text', array('label' => 'Apellidos'))
            ->add('telefono','text', array('label' => 'Teléfono'))
            ->add('direccion','text', array('label' => 'Dirección'))
            ->add('codigoMineduc','text', array('label' => 'Código mineduc'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sipie\ProBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sipie_probundle_usuario';
    }
}
