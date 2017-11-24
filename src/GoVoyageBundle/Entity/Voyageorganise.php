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
     * @var integer
     *
     * @ORM\Column(name="destination", type="string", nullable=true)
     */
    private $destination;
    /**
     * @var string
     *
     * @ORM\Column(name="imagevoyorg", type="text", length=65535, nullable=true)
     */
    private $imagevoyorg;
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
     * @return int
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param int $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getImagevoyorg()
    {
        return $this->imagevoyorg;
    }

    /**
     * @param int $idVoyage
     */
    public function setIdVoyage($idVoyage)
    {
        $this->idVoyage = $idVoyage;
    }

    /**
     * @param string $imagevoyorg
     */
    public function setImagevoyorg($imagevoyorg)
    {
        $this->imagevoyorg = $imagevoyorg;
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



    /*

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
