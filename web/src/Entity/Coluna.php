<?php

namespace App\Entity;

use App\Repository\ColunaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ColunaRepository::class)
 */
class Coluna
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

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
     */
    private $tabela;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
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
