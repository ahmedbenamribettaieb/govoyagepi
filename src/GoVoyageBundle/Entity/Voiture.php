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
     * @var integer
     *
     * @ORM\Column(name="id_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
<<<<<<< HEAD
    private $id_voiture;
=======
    private $idVoiture;
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="regNo", type="string", length=25, nullable=true)
=======
     * @ORM\Column(name="regNo", type="string", length=25, nullable=false)
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
     */
    private $regno;


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
     * @var integer
     *
     * @ORM\Column(name="client_vo_fk", type="integer", nullable=true)
     */
    private $clientVoFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="alv_vo_fk", type="integer", nullable=true)
     */
    private $alvVoFk;

    /**
     * @var string
     *
     * @ORM\Column(name="image_voiture", type="string", length=255, nullable=false)
     */
    private $imageVoiture;



<<<<<<< HEAD

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
=======
    /**
     * Get idVoiture
     *
     * @return integer
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
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
<<<<<<< HEAD
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
=======
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
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
<<<<<<< HEAD
     * @param string $status
=======
     * @param boolean $status
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
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
<<<<<<< HEAD
     * @return string
=======
     * @return boolean
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
<<<<<<< HEAD
     * Set alvVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $alvVoFk
     *
     * @return Voiture
     */
    public function setAlvVoFk(\GoVoyageBundle\Entity\Users $alvVoFk = null)
=======
     * Set clientVoFk
     *
     * @param integer $clientVoFk
     *
     * @return Voiture
     */
    public function setClientVoFk($clientVoFk)
    {
        $this->clientVoFk = $clientVoFk;

        return $this;
    }

    /**
     * Get clientVoFk
     *
     * @return integer
     */
    public function getClientVoFk()
    {
        return $this->clientVoFk;
    }

    /**
     * Set alvVoFk
     *
     * @param integer $alvVoFk
     *
     * @return Voiture
     */
    public function setAlvVoFk($alvVoFk)
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
    {
        $this->alvVoFk = $alvVoFk;

        return $this;
    }

    /**
     * Get alvVoFk
     *
<<<<<<< HEAD
     * @return \GoVoyageBundle\Entity\Users
=======
     * @return integer
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
     */
    public function getAlvVoFk()
    {
        return $this->alvVoFk;
    }

    /**
<<<<<<< HEAD
     * Set clientVoFk
     *
     * @param \GoVoyageBundle\Entity\Users $clientVoFk
     *
     * @return Voiture
     */
    public function setClientVoFk(\GoVoyageBundle\Entity\Users $clientVoFk = null)
    {
        $this->clientVoFk = $clientVoFk;
=======
     * Set regno
     *
     * @param string $regno
     *
     * @return Voiture
     */
    public function setRegno($regno)
    {
        $this->regno = $regno;
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get clientVoFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getClientVoFk()
    {
        return $this->clientVoFk;
=======
     * Get regno
     *
     * @return string
     */
    public function getRegno()
    {
        return $this->regno;
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
        $this->imgVoiture = $imgVoiture;

        return $this;
    }

    /**
     * Get imgVoiture
     *
     * @return string
     */
    public function getImgVoiture()
    {
        return $this->imgVoiture;
>>>>>>> 4b074e42bf6e13236202c49272de470081a21352
    }
}
