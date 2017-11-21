<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="alv_vo_fk", columns={"alv_vo_fk"}), @ORM\Index(name="client_vo_fk", columns={"client_vo_fk"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_voiture;

    /**
     * @var string
     *
     * @ORM\Column(name="regNo", type="string", length=25, nullable=true)
     */
    private $regno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="depart", type="date", nullable=true)
     */
    private $depart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrivee",type="date", nullable=true)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="img_voiture", type="string", length=255, nullable=true)
     */
    private $img_voiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=false)
     */
    private $rate;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alv_vo_fk", referencedColumnName="id_user")
     * })
     */
    private $alvVoFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_vo_fk", referencedColumnName="id_user")
     * })
     */
    private $clientVoFk;




    /**
     * Get id_voiture
     *
     * @return integer
     */
    public function getId_Voiture()
    {
        return $this->id_voiture;
    }

    /**
     * Set regno
     *
     * @param string $regno
     *
     * @return Voiture
     */
    public function setRegno($regno)
    {
        $this->regno = $regno;

        return $this;
    }

    /**
     * Get regno
     *
     * @return string
     */
    public function getRegno()
    {
        return $this->regno;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Voiture
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set imgVoiture
     *
     * @param string $imgVoiture
     *
     * @return Voiture
     */
    public function setImgVoiture($imgVoiture)
    {
        $this->img_voiture = $imgVoiture;

        return $this;
    }

    /**
     * Get imgVoiture
     *
     * @return string
     */
    public function getImgVoiture()
    {
        return $this->img_voiture;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Voiture
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Voiture
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Voiture
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Voiture
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set alvVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $alvVoFk
     *
     * @return Voiture
     */
    public function setAlvVoFk(\GoVoyageBundle\Entity\Users $alvVoFk = null)
    {
        $this->alvVoFk = $alvVoFk;

        return $this;
    }

    /**
     * Get alvVoFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getAlvVoFk()
    {
        return $this->alvVoFk;
    }

    /**
     * Set clientVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $clientVoFk
     *
     * @return Voiture
     */
    public function setClientVoFk(\GoVoyageBundle\Entity\Users $clientVoFk = null)
    {
        $this->clientVoFk = $clientVoFk;

        return $this;
    }

    /**
     * Get clientVoFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getClientVoFk()
    {
        return $this->clientVoFk;
    }

    /**
     * Get idVoiture
     *
     * @return integer
     */
    public function getIdVoiture()
    {
        return $this->id_voiture;
    }



    /**
     * Set depart
     *
     * @param \DateTime $depart
     *
     * @return Voiture
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return \DateTime
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set arrivee
     *
     * @param \DateTime $arrivee
     *
     * @return Voiture
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    /**
     * Get arrivee
     *
     * @return \DateTime
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }
}
