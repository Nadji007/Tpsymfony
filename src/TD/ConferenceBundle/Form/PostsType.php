<?php

namespace TD\ConferenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',       'text')
            ->add('extrait',     'text')
            ->add('contenu',     'textarea')
            ->add('tags',        'text')
            ->add('image',      new ImageType())


      ->add('tags', 'entity', array(
         'class'    => 'ConferenceBundle:Tags',
         'property' => 'name',
         'multiple' => true
      ))
      ->add('Valider',      'submit')
    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TD\ConferenceBundle\Entity\Posts'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'td_conferencebundle_posts';
    }
}
