<?php

namespace Wbn\WebinaireBundle\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Wbn\WebinaireBundle\Entity\Webi;
use Symfony\Component\Form\FormBuilder;
use Wbn\WebinaireBundle\Form\WebiHandler;
use Wbn\WebinaireBundle\Form\WebiType;
use Symfony\Component\Form\FormTypeInterface;

class WebinaireController extends Controller
{
    public function indexAction()
    {//testgit log
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

     /**
     * @Secure(roles="ROLE_MEMBRE")
     */
    public function modifierwebiAction($id)
    {
     $em = $this->getDoctrine()->getEntityManager();

        // On vérifie que l'article d'id $id existe bien, sinon, erreur 404.
        if( ! $webi = $em->getRepository('Wbn\WebinaireBundle\Entity\Webi')->find($id) )
        {
            throw $this->createNotFoundException('Webinaire [id='.$id.'] inexistant');
        }

 // On crée le formulaire
        $form = $this->createForm(new WebiType, $webi);

        // On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
        $formHandler = new WebiHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());

        // On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
        if( $formHandler->process() )
        {
        
            return $this->redirect( $this->generateUrl('webinaire_liste', array('id' => $webi->getId())) );
        }

        return $this->render('WbnWebinaireBundle:Membre:modifierwebi.html.twig', array( 'id' => $webi->getId(), 'webi' => $webi,
            'form' => $form->createView(),
        ));
    }

     /**
     * @Secure(roles="ROLE_MEMBRE")
     */
    public function listeAction($page)
    {
      // On récupère le repository
        $repository = $this->getDoctrine()
                           ->getEntityManager()
                           ->getRepository('WbnWebinaireBundle:Webi');

        // On récupère le nombre total d'articles
        $nb_webi = $repository->getTotal();

        // On définit le nombre de webi par page
        // (pour l'instant en dur dans le contrôleur, mais par la suite on le transformera en paramètre du bundle)
        $nb_webi_page = 20;

        // On calcul le nombre total de pages
        $nb_pages = ceil($nb_webi/$nb_webi_page);

        // On va récupérer les articles à partir du N-ième webi :
        $offset = ($page-1) * $nb_webi_page;

        // Ici on a changé la condition pour déclencher une erreur 404
        // lorsque la page est inférieur à 1 ou supérieur au nombre max.
        if( $page < 1 )
        {
            throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
        }

        // On récupère les articles qu'il faut grâce à findBy() :
        $webi = $repository->findBy(
            array(),                 // Pas de critère
            array('datecreation' => 'desc'), // On tri par date décroissante
            $nb_webi_page,       // On sélectionne $nb_webi_page webi
            $offset                  // A partir du $offset ième
        );
       
        return $this->render('WbnWebinaireBundle:Membre:liste.html.twig', array(
            'webi' => $webi,
            'page'     => $page,    // On transmet à la vue la page courante,
            'nb_pages' => $nb_pages // Et le nombre total de pages.
        ));
    }

    public function nouveauAction()
    {
     // On crée un objet Article.
    $webi = new Webi();

        // On crée le formulaire
        $form = $this->createForm(new WebiType, $webi);

        // On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
        $formHandler = new WebiHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());

        // On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
        if( $formHandler->process() )
        {
    
            // On redirige vers la page d'accueil, par exemple.
            return $this->redirect($this->generateUrl('webinaire_membre'));
        }
    

    // À ce stade :
    // - soit la requête est de type « GET », donc le visiteur vient d'arriver sur la page et veut voir le formulaire ;
    // - soit la requête est de type « POST », mais le formulaire n'est pas valide, donc on l'affiche de nouveau.

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule.
       
        return $this->render('WbnWebinaireBundle:Membre:nouveau.html.twig', array(
        'form' => $form->createView(),));
    }
}
