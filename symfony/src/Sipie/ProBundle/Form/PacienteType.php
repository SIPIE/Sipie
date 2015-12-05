<?php

namespace Sipie\ProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class PacienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut','text', array('label' => 'Rut'))
            ->add('nombres','text', array('label' => 'Nombres'))
            ->add('apellidos','text', array('label' => 'Apellidos'))
            ->add('telefono','text', array('label' => 'Teléfono'))
            ->add('email','email', array('label' => 'E-mail'))
            ->add('direccion','text', array('label' => 'Dirección'))
            ->add('sexo','choice', array('label' => 'Sexo',
				'choices'  => array(
					'Hombre' => 'Hombre',
					'Mujer' => 'Mujer',)))
            ->add('tipo','text', array('label' => 'Tipo'))
	        ->add('fechanac', 'date', array(
                'widget' => 'single_text',
                'required' => true,
				'format'=>'MM-dd-yyyy',
                'label' => 'Fecha de nacimiento',
                'attr' => array(
                    'class' => 'form-group input-inline datetimepicker',
                    'data-provide' => 'datepicker',
                    'data-format' => 'mm-dd-yyyy',
                ),
            ))
           ->add('lateralidad')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sipie\ProBundle\Entity\Paciente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sipie_probundle_paciente';
    }
}
