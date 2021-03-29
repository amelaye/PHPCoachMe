<?php


namespace App\Entity;

/**
 * Journal de la nourriture consommée lors des repas
 * Class NourritureConsommee
 * @package App\Entity
 * @author Amelie DUVERNET aka Amelaye <amelieonline@gmail.com>
 */
class NourritureConsommee
{
    /**
     * @var int
     */
    private $idNourritureConsommee;

    /**
     * @var string
     */
    private $libelleNourritureConsommee;

    /**
     * @var int
     */
    private $idRepas;

    /**
     * @return int
     */
    public function getIdNourritureConsommee() : int
    {
        return $this->idNourritureConsommee;
    }

    /**
     * @param mixed $idNourritureConsommee
     */
    public function setIdNourritureConsommee($idNourritureConsommee): void
    {
        $this->idNourritureConsommee = $idNourritureConsommee;
    }

    /**
     * @return mixed
     */
    public function getLibelleNourritureConsommee() : string
    {
        return $this->libelleNourritureConsommee;
    }

    /**
     * @param mixed $libelleNourritureConsommee
     */
    public function setLibelleNourritureConsommee($libelleNourritureConsommee): void
    {
        $this->libelleNourritureConsommee = $libelleNourritureConsommee;
    }

    /**
     * @return mixed
     */
    public function getIdRepas() : int
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
}