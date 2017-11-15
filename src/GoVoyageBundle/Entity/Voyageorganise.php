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




}

