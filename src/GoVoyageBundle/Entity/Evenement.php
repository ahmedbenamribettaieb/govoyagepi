<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=20, nullable=true)
     */
    private $activite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_activite", type="date", nullable=false)
     */
    private $dateActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=30, nullable=false)
     */
    private $emplacement;


}

