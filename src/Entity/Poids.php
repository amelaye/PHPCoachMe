<?php


namespace App\Entity;

/**
 * Gère le poids de la personne journalièrement
 * Class Poids
 * @package App\Entity
 * @author Amelie DUVERNET aka Amelaye <amelieonline@gmail.com>
 */
class Poids
{
    /**
     * @var int
     */
    private $idPoids;

    /**
     * @var float
     */
    private $poids;

    /**
     * @var string
     */
    private $datePesee;

    /**
     * @return mixed
     */
    public function getIdPoids() : int
    {
        return $this->idPoids;
    }

    /**
     * @param mixed $idPoids
     */
    public function setIdPoids($idPoids): void
    {
        $this->idPoids = $idPoids;
    }

    /**
     * @return mixed
     */
    public function getPoids() : float
    {
        return $this->poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids): void
    {
        $this->poids = $poids;
    }

    /**
     * @return mixed
     */
    public function getDatePesee() : string
    {
        return $this->datePesee;
    }

    /**
     * @param mixed $datePesee
     */
    public function setDatePesee($datePesee): void
    {
        $this->datePesee = $datePesee;
    }
}