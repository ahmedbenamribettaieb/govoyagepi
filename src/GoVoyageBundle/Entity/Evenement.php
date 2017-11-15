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



    /**
     * Get idEvenement
     *
     * @return integer
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return Evenement
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set dateActivite
     *
     * @param \DateTime $dateActivite
     *
     * @return Evenement
     */
    public function setDateActivite($dateActivite)
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    /**
     * Get dateActivite
     *
     * @return \DateTime
     */
    public function getDateActivite()
    {
        return $this->dateActivite;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     *
     * @return Evenement
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }
}
