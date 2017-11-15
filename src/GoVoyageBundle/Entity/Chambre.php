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
     * @return int
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * @param int $idChambre
     */
    public function setIdChambre($idChambre)
    {
        $this->idChambre = $idChambre;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getClientChFk()
    {
        return $this->clientChFk;
    }

    /**
     * @param int $clientChFk
     */
    public function setClientChFk($clientChFk)
    {
        $this->clientChFk = $clientChFk;
    }

    /**
     * @return int
     */
    public function getHotelChFk()
    {
        return $this->hotelChFk;
    }

    /**
     * @param int $hotelChFk
     */
    public function setHotelChFk($hotelChFk)
    {
        $this->hotelChFk = $hotelChFk;
    }



}

