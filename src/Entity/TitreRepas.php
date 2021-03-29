<?php


namespace App\Entity;

/**
 * Gère les éléments : petit déj / collation 10h / déjeuner / collation 16h / diner
 * Class TitreRepas
 * @package App\Entity
 * @author Amelie DUVERNET aka Amelaye <amelieonline@gmail.com>
 */
class TitreRepas
{
    /**
     * @var int
     */
    private $idTitreRepas;

    /**
     * @var string
     */
    private $libelleTitreRepas;

    /**
     * TitreRepas constructor.
     */
    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getIdTitreRepas() : int
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
    public function getLibelleTitreRepas() : string
    {
        return $this->libelleTitreRepas;
    }

    /**
     * @param mixed $libelleTitreRepas
     */
    public function setLibelleTitreRepas($libelleTitreRepas): void
    {
        $this->libelleTitreRepas = $libelleTitreRepas;
    }
}