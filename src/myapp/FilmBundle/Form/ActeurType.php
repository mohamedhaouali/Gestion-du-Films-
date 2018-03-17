<?php

namespace myapp\FilmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActeurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('required'=>true, 'attr'=> array('placeholder'=>'Nom')))
            ->add('prenom','text',array('required'=>true , 'attr'=> array('placeholder'=>'prenom')))
            ->add('date', 'birthday',array('format'=>'dd-MM-yyyy','years'=> range(1950,1992)))
            ->add('sexe','choice',array('choices'=>array('F'=>'Feminin','M'=>'Masculin'),'required'=>true,'expanded'=>true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'myapp\FilmBundle\Entity\Acteur'
        ));
    }
}
