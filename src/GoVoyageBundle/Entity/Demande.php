<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_client_fk", columns={"id_client_fk"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vp_fk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVpFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client_fk", type="integer", nullable=false)
     */
    private $idClientFk;

    /**
     * @var string
     *
     * @ORM\Column(name="id_guide_fk", type="string", length=30, nullable=false)
     */
    private $idGuideFk;

    /**
     * @return int
     */
    public function getIdVpFk()
    {
        return $this->idVpFk;
    }

    /**
     * @param int $idVpFk
     */
    public function setIdVpFk($idVpFk)
    {
        $this->idVpFk = $idVpFk;
    }

    /**
     * @return int
     */
    public function getIdClientFk()
    {
        return $this->idClientFk;
    }

    /**
     * @param int $idClientFk
     */
    public function setIdClientFk($idClientFk)
    {
        $this->idClientFk = $idClientFk;
    }

    /**
     * @return string
     */
    public function getIdGuideFk()
    {
        return $this->idGuideFk;
    }

    /**
     * @param string $idGuideFk
     */
    public function setIdGuideFk($idGuideFk)
    {
        $this->idGuideFk = $idGuideFk;
    }



}
