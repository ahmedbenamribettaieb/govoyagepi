<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table(name="vol", indexes={@ORM\Index(name="client_vol_fk", columns={"client_vol_fk"})})
 * @ORM\Entity
 */
class Vol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numTicket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numticket;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_vol", type="integer", nullable=false)
     */
    private $prixVol;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vol", type="string", length=30, nullable=false)
     */
    private $nomVol;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=30, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=30, nullable=false)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_compagnie", type="string", length=30, nullable=false)
     */
    private $nomCompagnie;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_vol_fk", type="integer", nullable=true)
     */
    private $clientVolFk;

    /**
     * @return int
     */
    public function getNumticket()
    {
        return $this->numticket;
    }

    /**
     * @param int $numticket
     */
    public function setNumticket($numticket)
    {
        $this->numticket = $numticket;
    }

    /**
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @param \DateTime $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }

    /**
     * @return \DateTime
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * @param \DateTime $dateArrivee
     */
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;
    }

    /**
     * @return int
     */
    public function getPrixVol()
    {
        return $this->prixVol;
    }

    /**
     * @param int $prixVol
     */
    public function setPrixVol($prixVol)
    {
        $this->prixVol = $prixVol;
    }

    /**
     * @return string
     */
    public function getNomVol()
    {
        return $this->nomVol;
    }

    /**
     * @param string $nomVol
     */
    public function setNomVol($nomVol)
    {
        $this->nomVol = $nomVol;
    }

    /**
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param string $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return string
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * @param string $arrivee
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;
    }

    /**
     * @return string
     */
    public function getNomCompagnie()
    {
        return $this->nomCompagnie;
    }

    /**
     * @param string $nomCompagnie
     */
    public function setNomCompagnie($nomCompagnie)
    {
        $this->nomCompagnie = $nomCompagnie;
    }

    /**
     * @return int
     */
    public function getClientVolFk()
    {
        return $this->clientVolFk;
    }

    /**
     * @param int $clientVolFk
     */
    public function setClientVolFk($clientVolFk)
    {
        $this->clientVolFk = $clientVolFk;
    }



}

