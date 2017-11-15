<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyagepersonalise
 *
 * @ORM\Table(name="voyagepersonalise", indexes={@ORM\Index(name="hotel_fk", columns={"hotel_fk"}), @ORM\Index(name="client_vp_fk", columns={"client_vp_fk"}), @ORM\Index(name="event1_fk", columns={"event1_fk"}), @ORM\Index(name="id_guide_fk", columns={"id_guide_fk"})})
 * @ORM\Entity
 */
class Voyagepersonalise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_depart", type="string", length=20, nullable=true)
     */
    private $villeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arrive", type="string", length=20, nullable=true)
     */
    private $villeArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="date", nullable=true)
     */
    private $dateArrive;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participant", type="integer", nullable=true)
     */
    private $nbrParticipant;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotel_fk", referencedColumnName="id_user")
     * })
     */
    private $hotelFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_vp_fk", referencedColumnName="id_user")
     * })
     */
    private $clientVpFk;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event1_fk", referencedColumnName="id_evenement")
     * })
     */
    private $event1Fk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_guide_fk", referencedColumnName="id_user")
     * })
     */
    private $idGuideFk;


}

