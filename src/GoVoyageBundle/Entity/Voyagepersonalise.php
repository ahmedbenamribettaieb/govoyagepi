<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;


/**
 * Voyagepersonalise
 *
 * @ORM\Table(name="voyagepersonalise", indexes={@ORM\Index(name="hotel_fk", columns={"hotel_fk"}), @ORM\Index(name="client_vp_fk", columns={"client_vp_fk"}), @ORM\Index(name="event1_fk", columns={"event1_fk"}), @ORM\Index(name="id_guide_fk", columns={"id_guide_fk"})})
 * @ORM\Entity
 * @Notifiable(name="voyagepersonalise")
 */
class Voyagepersonalise implements NotifiableInterface
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
     * @var integer
     *
     * @ORM\Column(name="hotel_fk", type="integer", nullable=true)
     */
    private $hotelFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_vp_fk", type="integer", nullable=true)
     */
    private $clientVpFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="event1_fk", type="integer", nullable=true)
     */
    private $event1Fk;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_guide_fk", type="integer", nullable=true)
     */
    private $idGuideFk;



    /**
     * Get idVp
     *
     * @return integer
     */
    public function getIdVp()
    {
        return $this->idVp;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Voyagepersonalise
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
     * Set villeDepart
     *
     * @param string $villeDepart
     *
     * @return Voyagepersonalise
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return string
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrive
     *
     * @param string $villeArrive
     *
     * @return Voyagepersonalise
     */
    public function setVilleArrive($villeArrive)
    {
        $this->villeArrive = $villeArrive;

        return $this;
    }

    /**
     * Get villeArrive
     *
     * @return string
     */
    public function getVilleArrive()
    {
        return $this->villeArrive;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Voyagepersonalise
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     *
     * @return Voyagepersonalise
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set nbrParticipant
     *
     * @param integer $nbrParticipant
     *
     * @return Voyagepersonalise
     */
    public function setNbrParticipant($nbrParticipant)
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

    /**
     * Get nbrParticipant
     *
     * @return integer
     */
    public function getNbrParticipant()
    {
        return $this->nbrParticipant;
    }

    /**
     * Set hotelFk
     *
     * @param integer $hotelFk
     *
     * @return Voyagepersonalise
     */
    public function setHotelFk($hotelFk)
    {
        $this->hotelFk = $hotelFk;

        return $this;
    }

    /**
     * Get hotelFk
     *
     * @return integer
     */
    public function getHotelFk()
    {
        return $this->hotelFk;
    }

    /**
     * Set clientVpFk
     *
     * @param integer $clientVpFk
     *
     * @return Voyagepersonalise
     */
    public function setClientVpFk($clientVpFk)
    {
        $this->clientVpFk = $clientVpFk;

        return $this;
    }

    /**
     * Get clientVpFk
     *
     * @return integer
     */
    public function getClientVpFk()
    {
        return $this->clientVpFk;
    }

    /**
     * Set event1Fk
     *
     * @param integer $event1Fk
     *
     * @return Voyagepersonalise
     */
    public function setEvent1Fk($event1Fk)
    {
        $this->event1Fk = $event1Fk;

        return $this;
    }

    /**
     * Get event1Fk
     *
     * @return integer
     */
    public function getEvent1Fk()
    {
        return $this->event1Fk;
    }

    /**
     * Set idGuideFk
     *
     * @param integer $idGuideFk
     *
     * @return Voyagepersonalise
     */
    public function setIdGuideFk($idGuideFk)
    {
        $this->idGuideFk = $idGuideFk;

        return $this;
    }

    /**
     * Get idGuideFk
     *
     * @return integer
     */
    public function getIdGuideFk()
    {
        return $this->idGuideFk;
    }
}
