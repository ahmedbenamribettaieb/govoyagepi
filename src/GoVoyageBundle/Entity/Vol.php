<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table(name="vol", indexes={@ORM\Index(name="client_vol_fk", columns={"client_vol_fk"})})
 * @ORM\Entity
 */
class Vol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numTicket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numticket;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_vol", type="integer", nullable=false)
     */
    private $prixVol;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vol", type="string", length=30, nullable=false)
     */
    private $nomVol;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=30, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=30, nullable=false)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_compagnie", type="string", length=30, nullable=false)
     */
    private $nomCompagnie;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_vol_fk", type="integer", nullable=true)
     */
    private $clientVolFk;


}

