<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="client_ch_fk", columns={"client_ch_fk"}), @ORM\Index(name="hotel_ch_fk", columns={"hotel_ch_fk"})})
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_ch_fk", type="integer", nullable=false)
     */
    private $clientChFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="hotel_ch_fk", type="integer", nullable=false)
     */
    private $hotelChFk;



    /**
     * Get idChambre
     *
     * @return integer
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Chambre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Chambre
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
     * Set clientChFk
     *
     * @param integer $clientChFk
     *
     * @return Chambre
     */
    public function setClientChFk($clientChFk)
    {
        $this->clientChFk = $clientChFk;

        return $this;
    }

    /**
     * Get clientChFk
     *
     * @return integer
     */
    public function getClientChFk()
    {
        return $this->clientChFk;
    }

    /**
     * Set hotelChFk
     *
     * @param integer $hotelChFk
     *
     * @return Chambre
     */
    public function setHotelChFk($hotelChFk)
    {
        $this->hotelChFk = $hotelChFk;

        return $this;
    }

    /**
     * Get hotelChFk
     *
     * @return integer
     */
    public function getHotelChFk()
    {
        return $this->hotelChFk;
    }
}
