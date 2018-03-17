<?php

namespace myapp\FilmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->add('description','textarea')
            ->add('categorie','entity', array('class'=>"FilmBundle:categorie",'property'=> 'nom','multiple'=>FALSE,'required'=>TRUE)) 
            ->add('Acteur','entity', array('class' =>"FilmBundle:Acteur",'property'=> 'PrenomNom','multiple'=>TRUE,'required'=>TRUE)) 
            ->add('file')    
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'myapp\FilmBundle\Entity\Film'
        ));
    }
}
