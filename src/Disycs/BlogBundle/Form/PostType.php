<?php

namespace Disycs\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('category', 'entity', array(
                  'attr'=>array('class'=>"form-control", 'required'=>true),
                  'class'    => 'DisycsBlogBundle:Category',
                  'property' => 'name',
                  'multiple' => false,
                  'empty_value' => 'Chose a category',
                  'required'=>true,
                  'label' => 'CourseType'))
            ->add('tags','entity', array(
                  'attr'=>array('class'=>"form-control", 'required'=>true),
                  'class'    => 'DisycsBlogBundle:Tag',
                  'property' => 'name',
                  'multiple' => true,
                  'empty_value' => 'Pic some tags',
                  'required'=>true,
                  'label' => 'CourseType'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Disycs\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'disycs_blogbundle_post';
    }
}
