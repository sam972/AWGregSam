<?php

namespace Wbn\WebinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbn\WebinaireBundle\Entity\Webi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wbn\WebinaireBundle\Entity\WebiRepository")
 */

class Webi
{
     /**
     * @ORM\ManyToOne(targetEntity="Wbn\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime $datecreation
     *
     * @ORM\Column(name="datecreation", type="datetime")
     */
    private $datecreation;

    /**
     * @var string $titrepage
     *
     * @ORM\Column(name="titrepage", type="string", length=255)
     */
    private $titrepage;

    /**
     * @var string $motclepage
     *
     * @ORM\Column(name="motclepage", type="string", length=255)
     */
    private $motclepage;

    /**
     * @var string $descriptionpage
     *
     * @ORM\Column(name="descriptionpage", type="string", length=255)
     */
    private $descriptionpage;

    /**
     * @var string $timezone
     *
     * @ORM\Column(name="timezone", type="string", length=255)
     */
    private $timezone;

    /**
     * @var string $plannification
     *
     * @ORM\Column(name="plannification", type="string", length=255)
     */
    private $plannification;

    /**
     * @var boolean $activerplannification
     *
     * @ORM\Column(name="activerplannification", type="boolean")
     */
    private $activerplannification;

    /**
     * @var integer $nombredejouraafficher
     *
     * @ORM\Column(name="nombredejouraafficher", type="integer")
     */
    private $nombredejouraafficher;

    /**
     * @var integer $nombresessionjour
     *
     * @ORM\Column(name="nombresessionjour", type="integer")
     */
    private $nombresessionjour;

    /**
     * @var array $heuredessessions
     *
     * @ORM\Column(name="heuredessessions", type="array")
     */
    private $heuredessessions;

    /**
     * @var string $sujetwebinaire
     *
     * @ORM\Column(name="sujetwebinaire", type="string", length=255)
     */
    private $sujetwebinaire;

    /**
     * @var string $nompresentateur
     *
     * @ORM\Column(name="nompresentateur", type="string", length=255)
     */
    private $nompresentateur;

    /**
     * @var \stdClass $imagepresentateur
     *
     * @ORM\Column(name="imagepresentateur", type="object")
     */
    private $imagepresentateur;

    /**
     * @var string $textheader
     *
     * @ORM\Column(name="textheader", type="string", length=255)
     */
    private $textheader;

    /**
     * @var boolean $activeraffichagepresentateur
     *
     * @ORM\Column(name="activeraffichagepresentateur", type="boolean")
     */
    private $activeraffichagepresentateur;

    /**
     * @var boolean $activeraffichagedescription
     *
     * @ORM\Column(name="activeraffichagedescription", type="boolean")
     */
    private $activeraffichagedescription;

    /**
     * @var string $descriptionwebinaire
     *
     * @ORM\Column(name="descriptionwebinaire", type="text")
     */
    private $descriptionwebinaire;

    /**
     * @var string $urlvideoremerciment
     *
     * @ORM\Column(name="urlvideoremerciment", type="string", length=255)
     */
    private $urlvideoremerciment;

    /**
     * @var boolean $affichervideocomptearebour
     *
     * @ORM\Column(name="affichervideocomptearebour", type="boolean")
     */
    private $affichervideocomptearebour;

    /**
     * @var string $urlvideocomptearebour
     *
     * @ORM\Column(name="urlvideocomptearebour", type="string", length=255)
     */
    private $urlvideocomptearebour;

    /**
     * @var string $urlvideowebinaire
     *
     * @ORM\Column(name="urlvideowebinaire", type="string", length=255)
     */
    private $urlvideowebinaire;

    /**
     * @var \DateTime $dureevideo
     *
     * @ORM\Column(name="dureevideo", type="time")
     */
    private $dureevideo;

    public function __construct()
    {
        $this->datecreation = new \Datetime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Webi
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Webi
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    
        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set titrepage
     *
     * @param string $titrepage
     * @return Webi
     */
    public function setTitrepage($titrepage)
    {
        $this->titrepage = $titrepage;
    
        return $this;
    }

    /**
     * Get titrepage
     *
     * @return string 
     */
    public function getTitrepage()
    {
        return $this->titrepage;
    }

    /**
     * Set motclepage
     *
     * @param string $motclepage
     * @return Webi
     */
    public function setMotclepage($motclepage)
    {
        $this->motclepage = $motclepage;
    
        return $this;
    }

    /**
     * Get motclepage
     *
     * @return string 
     */
    public function getMotclepage()
    {
        return $this->motclepage;
    }

    /**
     * Set descriptionpage
     *
     * @param string $descriptionpage
     * @return Webi
     */
    public function setDescriptionpage($descriptionpage)
    {
        $this->descriptionpage = $descriptionpage;
    
        return $this;
    }

    /**
     * Get descriptionpage
     *
     * @return string 
     */
    public function getDescriptionpage()
    {
        return $this->descriptionpage;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return Webi
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set plannification
     *
     * @param string $plannification
     * @return Webi
     */
    public function setPlannification($plannification)
    {
        $this->plannification = $plannification;
    
        return $this;
    }

    /**
     * Get plannification
     *
     * @return string 
     */
    public function getPlannification()
    {
        return $this->plannification;
    }

    /**
     * Set activerplannification
     *
     * @param boolean $activerplannification
     * @return Webi
     */
    public function setActiverplannification($activerplannification)
    {
        $this->activerplannification = $activerplannification;
    
        return $this;
    }

    /**
     * Get activerplannification
     *
     * @return boolean 
     */
    public function getActiverplannification()
    {
        return $this->activerplannification;
    }

    /**
     * Set nombredejouraafficher
     *
     * @param integer $nombredejouraafficher
     * @return Webi
     */
    public function setNombredejouraafficher($nombredejouraafficher)
    {
        $this->nombredejouraafficher = $nombredejouraafficher;
    
        return $this;
    }

    /**
     * Get nombredejouraafficher
     *
     * @return integer 
     */
    public function getNombredejouraafficher()
    {
        return $this->nombredejouraafficher;
    }

    /**
     * Set nombresessionjour
     *
     * @param integer $nombresessionjour
     * @return Webi
     */
    public function setNombresessionjour($nombresessionjour)
    {
        $this->nombresessionjour = $nombresessionjour;
    
        return $this;
    }

    /**
     * Get nombresessionjour
     *
     * @return integer 
     */
    public function getNombresessionjour()
    {
        return $this->nombresessionjour;
    }

    /**
     * Set heuredessessions
     *
     * @param array $heuredessessions
     * @return Webi
     */
    public function setHeuredessessions($heuredessessions)
    {
        $this->heuredessessions = $heuredessessions;
    
        return $this;
    }

    /**
     * Get heuredessessions
     *
     * @return array 
     */
    public function getHeuredessessions()
    {
        return $this->heuredessessions;
    }

    /**
     * Set sujetwebinaire
     *
     * @param string $sujetwebinaire
     * @return Webi
     */
    public function setSujetwebinaire($sujetwebinaire)
    {
        $this->sujetwebinaire = $sujetwebinaire;
    
        return $this;
    }

    /**
     * Get sujetwebinaire
     *
     * @return string 
     */
    public function getSujetwebinaire()
    {
        return $this->sujetwebinaire;
    }

    /**
     * Set nompresentateur
     *
     * @param string $nompresentateur
     * @return Webi
     */
    public function setNompresentateur($nompresentateur)
    {
        $this->nompresentateur = $nompresentateur;
    
        return $this;
    }

    /**
     * Get nompresentateur
     *
     * @return string 
     */
    public function getNompresentateur()
    {
        return $this->nompresentateur;
    }

    /**
     * Set imagepresentateur
     *
     * @param \stdClass $imagepresentateur
     * @return Webi
     */
    public function setImagepresentateur($imagepresentateur)
    {
        $this->imagepresentateur = $imagepresentateur;
    
        return $this;
    }

    /**
     * Get imagepresentateur
     *
     * @return \stdClass 
     */
    public function getImagepresentateur()
    {
        return $this->imagepresentateur;
    }

    /**
     * Set textheader
     *
     * @param string $textheader
     * @return Webi
     */
    public function setTextheader($textheader)
    {
        $this->textheader = $textheader;
    
        return $this;
    }

    /**
     * Get textheader
     *
     * @return string 
     */
    public function getTextheader()
    {
        return $this->textheader;
    }

    /**
     * Set enablevideo
     *
     * @param boolean $enablevideo
     * @return Webi
     */
    public function setEnablevideo($enablevideo)
    {
        $this->enablevideo = $enablevideo;
    
        return $this;
    }

    /**
     * Get enablevideo
     *
     * @return boolean 
     */
    public function getEnablevideo()
    {
        return $this->enablevideo;
    }

    /**
     * Set activeraffichagepresentateur
     *
     * @param boolean $activeraffichagepresentateur
     * @return Webi
     */
    public function setActiveraffichagepresentateur($activeraffichagepresentateur)
    {
        $this->activeraffichagepresentateur = $activeraffichagepresentateur;
    
        return $this;
    }

    /**
     * Get activeraffichagepresentateur
     *
     * @return boolean 
     */
    public function getActiveraffichagepresentateur()
    {
        return $this->activeraffichagepresentateur;
    }

    /**
     * Set activeraffichagedescription
     *
     * @param boolean $activeraffichagedescription
     * @return Webi
     */
    public function setActiveraffichagedescription($activeraffichagedescription)
    {
        $this->activeraffichagedescription = $activeraffichagedescription;
    
        return $this;
    }

    /**
     * Get activeraffichagedescription
     *
     * @return boolean 
     */
    public function getActiveraffichagedescription()
    {
        return $this->activeraffichagedescription;
    }

    /**
     * Set descriptionwebinaire
     *
     * @param string $descriptionwebinaire
     * @return Webi
     */
    public function setDescriptionwebinaire($descriptionwebinaire)
    {
        $this->descriptionwebinaire = $descriptionwebinaire;
    
        return $this;
    }

    /**
     * Get descriptionwebinaire
     *
     * @return string 
     */
    public function getDescriptionwebinaire()
    {
        return $this->descriptionwebinaire;
    }

    /**
     * Set urlvideoremerciment
     *
     * @param string $urlvideoremerciment
     * @return Webi
     */
    public function setUrlvideoremerciment($urlvideoremerciment)
    {
        $this->urlvideoremerciment = $urlvideoremerciment;
    
        return $this;
    }

    /**
     * Get urlvideoremerciment
     *
     * @return string 
     */
    public function getUrlvideoremerciment()
    {
        return $this->urlvideoremerciment;
    }

    /**
     * Set affichervideocomptearebour
     *
     * @param boolean $affichervideocomptearebour
     * @return Webi
     */
    public function setAffichervideocomptearebour($affichervideocomptearebour)
    {
        $this->affichervideocomptearebour = $affichervideocomptearebour;
    
        return $this;
    }

    /**
     * Get affichervideocomptearebour
     *
     * @return boolean 
     */
    public function getAffichervideocomptearebour()
    {
        return $this->affichervideocomptearebour;
    }

    /**
     * Set urlvideocomptearebour
     *
     * @param string $urlvideocomptearebour
     * @return Webi
     */
    public function setUrlvideocomptearebour($urlvideocomptearebour)
    {
        $this->urlvideocomptearebour = $urlvideocomptearebour;
    
        return $this;
    }

    /**
     * Get urlvideocomptearebour
     *
     * @return string 
     */
    public function getUrlvideocomptearebour()
    {
        return $this->urlvideocomptearebour;
    }

    /**
     * Set urlvideowebinaire
     *
     * @param string $urlvideowebinaire
     * @return Webi
     */
    public function setUrlvideowebinaire($urlvideowebinaire)
    {
        $this->urlvideowebinaire = $urlvideowebinaire;
    
        return $this;
    }

    /**
     * Get urlvideowebinaire
     *
     * @return string 
     */
    public function getUrlvideowebinaire()
    {
        return $this->urlvideowebinaire;
    }

    /**
     * Set dureevideo
     *
     * @param \DateTime $dureevideo
     * @return Webi
     */
    public function setDureevideo($dureevideo)
    {
        $this->dureevideo = $dureevideo;
    
        return $this;
    }

    /**
     * Get dureevideo
     *
     * @return \DateTime 
     */
    public function getDureevideo()
    {
        return $this->dureevideo;
    }

    /**
     * Set user
     *
     * @param Wbn\UserBundle\Entity\User $user
     * @return Webi
     */
    public function setUser(\Wbn\UserBundle\Entity\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Wbn\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

}
