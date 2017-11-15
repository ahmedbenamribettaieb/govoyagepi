<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D5428AED92FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_D5428AEDA0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_D5428AEDC05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=180, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=180, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=180, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numTel", type="integer", nullable=true)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=30, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer", nullable=true)
     */
    private $etoile;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre", type="integer", nullable=true)
     */
    private $nbChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=30, nullable=true)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissence", type="date", nullable=true)
     */
    private $datenaissence;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_note", type="integer", nullable=true)
     */
    private $nbrNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voiture", type="integer", nullable=true)
     */
    private $nbrVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voyage_organise", type="integer", nullable=true)
     */
    private $nbrVoyageOrganise;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre_reserve", type="integer", nullable=true)
     */
    private $nbChambreReserve;


}

