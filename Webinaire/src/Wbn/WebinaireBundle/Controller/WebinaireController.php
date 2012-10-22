<?php

namespace Wbn\WebinaireBundle\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Wbn\WebinaireBundle\Entity\Webi;
use Symfony\Component\Form\FormBuilder;
use Wbn\WebinaireBundle\Form\WebiHandler;
use Wbn\WebinaireBundle\Form\WebiType;

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


    // On crée le FormBuilder grâce à la méthode du contrôleur.
    $formBuilder = $this->createFormBuilder($webi);
        // On passe l'$article récupéré au formulaire
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
 // On récupère la requête.
    $request = $this->get('request');

    // On vérifie qu'elle est de type « POST ».
    if( $request->getMethod() == 'POST' )
    {
        // On fait le lien Requête <-> Formulaire.
        $form->bindRequest($request);

        // On vérifie que les valeurs rentrées sont correctes.
        // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
        if( $form->isValid() )
        {
            // On l'enregistre notre objet $article dans la base de données.
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($webi);
            $em->flush();

        
            return $this->redirect( $this->generateUrl('webinaire_liste', array('id' => $webi->getId())) );
        }}

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
 // On récupère la requête.
    $request = $this->get('request');

    // On vérifie qu'elle est de type « POST ».
    if( $request->getMethod() == 'POST' )
    {
        // On fait le lien Requête <-> Formulaire.
        $form->bindRequest($request);

        // On vérifie que les valeurs rentrées sont correctes.
        // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
        if( $form->isValid() )
        {
            // On l'enregistre notre objet $article dans la base de données.
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($webi);
            $em->flush();

            // On redirige vers la page d'accueil, par exemple.
            return $this->redirect($this->generateUrl('webinaire_membre'));
        }
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
