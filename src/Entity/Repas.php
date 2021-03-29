<?php


namespace App\Entity;

/**
 * Définit les repas journaliers
 * Class Repas
 * @package App\Entity
 * @author Amelie DUVERNET aka Amelaye <amelieonline@gmail.com>
 */
class Repas
{
    /**
     * @var int
     */
    private $idRepas;

    /**
     * @var int
     */
    private $idTitreRepas;

    /**
     * @var string
     */
    private $dateRepas; // datetime

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdRepas()
    {
        return $this->idRepas;
    }

    /**
     * @param mixed $idRepas
     */
    public function setIdRepas($idRepas): void
    {
        $this->idRepas = $idRepas;
    }

    /**
     * @return mixed
     */
    public function getIdTitreRepas()
    {
        return $this->idTitreRepas;
    }

    /**
     * @param mixed $idTitreRepas
     */
    public function setIdTitreRepas($idTitreRepas): void
    {
        $this->idTitreRepas = $idTitreRepas;
    }

    /**
     * @return mixed
     */
    public function getDateRepas()
    {
        return $this->dateRepas;
    }

    /**
     * @param mixed $dateRepas
     */
    public function setDateRepas($dateRepas): void
    {
        $this->dateRepas = $dateRepas;
    }
}