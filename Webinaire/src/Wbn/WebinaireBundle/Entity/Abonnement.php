<?php

namespace Wbn\WebinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbn\WebinaireBundle\Entity\Abonnement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wbn\WebinaireBundle\Entity\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $debut
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime $fin
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /**
     * @var integer $prix
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var boolean $renouvellement
     *
     * @ORM\Column(name="renouvellement", type="boolean")
     */
    private $renouvellement;


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
     * Set debut
     *
     * @param \DateTime $debut
     * @return Abonnement
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    
        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Abonnement
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    
        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Abonnement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set renouvellement
     *
     * @param boolean $renouvellement
     * @return Abonnement
     */
    public function setRenouvellement($renouvellement)
    {
        $this->renouvellement = $renouvellement;
    
        return $this;
    }

    /**
     * Get renouvellement
     *
     * @return boolean 
     */
    public function getRenouvellement()
    {
        return $this->renouvellement;
    }
}
