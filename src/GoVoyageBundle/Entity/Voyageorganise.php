<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyageorganise
 *
 * @ORM\Table(name="voyageorganise")
 * @ORM\Entity
 */
class Voyageorganise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_voyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoyage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_agence", type="integer", nullable=true)
     */
    private $idAgence;

    /**
     * @var integer
     *
     * @ORM\Column(name="titreVoyage", type="integer", nullable=true)
     */
    private $titrevoyage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutVoy", type="date", nullable=true)
     */
    private $datedebutvoy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinVoy", type="date", nullable=true)
     */
    private $datefinvoy;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLimiteRes", type="date", nullable=true)
     */
    private $datelimiteres;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePlacesDisp", type="integer", nullable=true)
     */
    private $nbreplacesdisp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePlacesRes", type="integer", nullable=true)
     */
    private $nbreplacesres;



    /**
     * Get idVoyage
     *
     * @return integer
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * Set idAgence
     *
     * @param integer $idAgence
     *
     * @return Voyageorganise
     */
    public function setIdAgence($idAgence)
    {
        $this->idAgence = $idAgence;

        return $this;
    }

    /**
     * Get idAgence
     *
     * @return integer
     */
    public function getIdAgence()
    {
        return $this->idAgence;
    }

    /**
     * Set titrevoyage
     *
     * @param integer $titrevoyage
     *
     * @return Voyageorganise
     */
    public function setTitrevoyage($titrevoyage)
    {
        $this->titrevoyage = $titrevoyage;

        return $this;
    }

    /**
     * Get titrevoyage
     *
     * @return integer
     */
    public function getTitrevoyage()
    {
        return $this->titrevoyage;
    }

    /**
     * Set datedebutvoy
     *
     * @param \DateTime $datedebutvoy
     *
     * @return Voyageorganise
     */
    public function setDatedebutvoy($datedebutvoy)
    {
        $this->datedebutvoy = $datedebutvoy;

        return $this;
    }

    /**
     * Get datedebutvoy
     *
     * @return \DateTime
     */
    public function getDatedebutvoy()
    {
        return $this->datedebutvoy;
    }

    /**
     * Set datefinvoy
     *
     * @param \DateTime $datefinvoy
     *
     * @return Voyageorganise
     */
    public function setDatefinvoy($datefinvoy)
    {
        $this->datefinvoy = $datefinvoy;

        return $this;
    }

    /**
     * Get datefinvoy
     *
     * @return \DateTime
     */
    public function getDatefinvoy()
    {
        return $this->datefinvoy;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Voyageorganise
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Voyageorganise
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set datelimiteres
     *
     * @param \DateTime $datelimiteres
     *
     * @return Voyageorganise
     */
    public function setDatelimiteres($datelimiteres)
    {
        $this->datelimiteres = $datelimiteres;

        return $this;
    }

    /**
     * Get datelimiteres
     *
     * @return \DateTime
     */
    public function getDatelimiteres()
    {
        return $this->datelimiteres;
    }

    /**
     * Set nbreplacesdisp
     *
     * @param integer $nbreplacesdisp
     *
     * @return Voyageorganise
     */
    public function setNbreplacesdisp($nbreplacesdisp)
    {
        $this->nbreplacesdisp = $nbreplacesdisp;

        return $this;
    }

    /**
     * Get nbreplacesdisp
     *
     * @return integer
     */
    public function getNbreplacesdisp()
    {
        return $this->nbreplacesdisp;
    }

    /**
     * Set nbreplacesres
     *
     * @param integer $nbreplacesres
     *
     * @return Voyageorganise
     */
    public function setNbreplacesres($nbreplacesres)
    {
        $this->nbreplacesres = $nbreplacesres;

        return $this;
    }

    /**
     * Get nbreplacesres
     *
     * @return integer
     */
    public function getNbreplacesres()
    {
        return $this->nbreplacesres;
    }
}
