<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coluna
 *
 * @ORM\Table(name="coluna")
 * @ORM\Entity(repositoryClass=ColunaRepository::class)
 */
class Coluna
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="nomeCol", type="string", length=255)
     */
    public $nomeCol;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $tipo;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isNotNull;

    /**
     * @ORM\ManyToOne(targetEntity="Tabela", inversedBy="coluna")
    *  @ORM\JoinColumn(name="tabela_id", referencedColumnName="id")
     */
    private $tabela;

     /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getNomeCol()
    {
        return $this->nomeCol;
    }

    public function setNomeCol(string $nomeCol)
    {
        return $this->nomeCol = $nomeCol;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo)
    {
        return $this->tipo = $tipo;
    }

    public function isIsNotNull()
    {
        return $this->isNotNull;
    }

    public function setIsNotNull(bool $isNotNull)
    {
        return $this->isNotNull = $isNotNull;
    }
      /**
     * Set tabela
     *
     * @param \App\Entity\Tabela $tabela
     *
     * @return Coluna
     */
    public function setTabela(\App\Entity\Tabela $tabela = null)
    {
        return $this->tabela = $tabela;
    }

    /**
     * @return \App\Entity\Coluna
     */
    public function getTabela()
    {
        return $this->tabela;
    }
}
