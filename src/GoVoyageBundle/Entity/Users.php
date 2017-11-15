<?php

namespace GoVoyageBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class Users extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id_user",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    protected $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numTel", type="integer", nullable=true)
     */
    protected $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     */
    protected $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=30, nullable=true)
     */
    protected $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer", nullable=true)
     */
    protected $etoile;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre", type="integer", nullable=true)
     */
    protected $nbChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=30, nullable=true)
     */
    protected $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissence", type="date", nullable=true)
     */
    protected $datenaissence;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    protected $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_note", type="integer", nullable=true)
     */
    protected $nbrNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voiture", type="integer", nullable=true)
     */
    protected $nbrVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voyage_organise", type="integer", nullable=true)
     */
    protected $nbrVoyageOrganise;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre_reserve", type="integer", nullable=true)
     */
    protected $nbChambreReserve;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * @param int $numtel
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * @param int $etoile
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;
    }

    /**
     * @return int
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * @param int $nbChambre
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return \DateTime
     */
    public function getDatenaissence()
    {
        return $this->datenaissence;
    }

    /**
     * @param \DateTime $datenaissence
     */
    public function setDatenaissence($datenaissence)
    {
        $this->datenaissence = $datenaissence;
    }

    /**
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param int $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getNbrNote()
    {
        return $this->nbrNote;
    }

    /**
     * @param int $nbrNote
     */
    public function setNbrNote($nbrNote)
    {
        $this->nbrNote = $nbrNote;
    }

    /**
     * @return int
     */
    public function getNbrVoiture()
    {
        return $this->nbrVoiture;
    }

    /**
     * @param int $nbrVoiture
     */
    public function setNbrVoiture($nbrVoiture)
    {
        $this->nbrVoiture = $nbrVoiture;
    }

    /**
     * @return int
     */
    public function getNbrVoyageOrganise()
    {
        return $this->nbrVoyageOrganise;
    }

    /**
     * @param int $nbrVoyageOrganise
     */
    public function setNbrVoyageOrganise($nbrVoyageOrganise)
    {
        $this->nbrVoyageOrganise = $nbrVoyageOrganise;
    }

    /**
     * @return int
     */
    public function getNbChambreReserve()
    {
        return $this->nbChambreReserve;
    }

    /**
     * @param int $nbChambreReserve
     */
    public function setNbChambreReserve($nbChambreReserve)
    {
        $this->nbChambreReserve = $nbChambreReserve;
    }


}

