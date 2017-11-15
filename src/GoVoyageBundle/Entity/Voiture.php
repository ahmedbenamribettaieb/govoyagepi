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
    private $idVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=false)
     */
    private $model;

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
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
     * @ORM\Column(name="regNo", type="string", length=25, nullable=true)
     */
    private $regno;

    /**
     * @var string
     *
     * @ORM\Column(name="img_voiture", type="string", length=255, nullable=true)
     */
    private $imgVoiture;


}

