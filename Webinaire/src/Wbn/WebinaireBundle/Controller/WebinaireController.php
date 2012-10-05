<?php

namespace Wbn\WebinaireBundle\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class WebinaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('WbnWebinaireBundle:Visiteur:index.html.twig');
    }

    public function faqAction()
    {
        return $this->render('WbnWebinaireBundle:Visiteur:faq.html.twig');
    }

    public function supportAction()
    {
        return $this->render('WbnWebinaireBundle:Visiteur:support.html.twig');
    }

    public function aproposAction()
    {
        return $this->render('WbnWebinaireBundle:Visiteur:apropos.html.twig');
    }
 	 /**
     * @Secure(roles="ROLE_MEMBRE")
     */
    public function membreAction()
    {
     
       
        return $this->render('WbnWebinaireBundle:Membre:membre.html.twig');
    }
}
