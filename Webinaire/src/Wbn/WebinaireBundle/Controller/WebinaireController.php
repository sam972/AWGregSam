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

    public function infosAction()
    {
        return $this->render('WbnWebinaireBundle:Visiteur:login.html.twig');
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
/* ->add('datecreation',    'date')
        ->add('Titre de la page',    'date')
        ->add('Mot clef de la page',    'date')
        ->add('Description de la page',    'date')
        ->add('Nom du Webinaire',    'text')
        ->add('Timezone du Webinaire',    'date')
        ->add('Plannification',    'date')
        ->add('Activer la plannification',    'date')
        ->add('Afficher combien de jours?',    'date')
        ->add('Nombre de session/jours',    'date')
        ->add('Heure des sessions',    'date')
        ->add('Sujet du Webinaire',    'date')
        ->add('Nom du présentateur',    'date')
        ->add('Image du présentateur',    'date')
        ->add('Votre Headear (Slogant)',    'date')
        ->add('Activer l\'affichage de la déscription',    'date')
        ->add('Déscription du Webinaire',    'date')
        ->add('URL compléte de la vidéo de remerciment',    'date')
        ->add('Afficher Video Compte à rebour',    'date')
        ->add('URL compléte de la vidéo compte à rebour',    'date')
        ->add('URL compléte de la vidéo live',    'date')
        ->add('Durée de la Vidéo',    'date');*/
    // On ajoute les champs de l'entité que l'on veut à notre formulaire.
    $formBuilder
        ->add('nom')
       // ->add('datecreation',    'date')
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

    // Pour l'instant, pas de tags, on les gérera plus tard.

    // À partir du formBuilder, on génère le formulaire.
    $form = $formBuilder->getForm();

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule.
       
        return $this->render('WbnWebinaireBundle:Membre:nouveau.html.twig', array(
        'form' => $form->createView(),));
    }
}
