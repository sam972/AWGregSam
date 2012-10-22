<?php
// src/Sdz/BlogBundle/Form/ArticleType.php

namespace Wbn\WebinaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

class WebiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom')
        ->add('titrepage')
        ->add('motclepage')
        ->add('descriptionpage')
        ->add('timezone')
        ->add('plannification')
        ->add('activerplannification')
        ->add('nombredejouraafficher')
        ->add('nombresessionjour')
        ->add('heuredessessions')
        ->add('sujetwebinaire')
        ->add('nompresentateur')
        ->add('imagepresentateur')
        ->add('textheader')
        ->add('activeraffichagedescription')
        ->add('activeraffichagedescription')
        ->add('activeraffichagepresentateur')
        ->add('descriptionwebinaire')
        ->add('urlvideoremerciment')
        ->add('affichervideocomptearebour')
        ->add('urlvideocomptearebour')
        ->add('urlvideowebinaire')
        ->add('dureevideo');       
    }

    public function getName()
    {
        return 'wbn_webinairebundle_webitype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Wbn\WebinaireBundle\Entity\Webi',
        );
    }
}