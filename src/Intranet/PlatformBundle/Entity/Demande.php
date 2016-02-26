<?php

namespace Intranet\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 */
class Demande {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Date
     */
    private $dateDebut;

    /**
     * @var \Date
     */
    private $dateFin;

    /**
     * @var string
     */
    private $description;

    /*Constructeur pour prédéfinir l'attribut date à la date d'aujourd'hui*/
    public function __construct() {
        $this->dateDebut = new \Datetime();
        $this->dateFin = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \Date $dateDebut
     * @return Demande
     */
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \Date $dateFin
     * @return Demande
     */
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \Date
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Demande
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

}
