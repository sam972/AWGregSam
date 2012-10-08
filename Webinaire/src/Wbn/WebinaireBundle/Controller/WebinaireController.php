<?php

namespace Wbn\WebinaireBundle\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Wbn\WebinaireBundle\Entity\Webi;
use Symfony\Component\Form\FormBuilder;
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

    public function nouveauAction()
    {
     // On crée un objet Article.
    $webi = new Webi();

    // On crée le FormBuilder grâce à la méthode du contrôleur.
    $formBuilder = $this->createFormBuilder($webi);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire.
    $formBuilder
        ->add('nom',    'text')
        ->add('datecreation',    'date');
       

    // Pour l'instant, pas de tags, on les gérera plus tard.

    // À partir du formBuilder, on génère le formulaire.
    $form = $formBuilder->getForm();

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule.
       
        return $this->render('WbnWebinaireBundle:Membre:nouveau.html.twig', array(
        'form' => $form->createView(),));
    }
}
