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


}

