<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=TabelaRepository::class)
 */
class Tabela
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

    public $coluna;



    public function __construct()
    {
        $this->coluna = new ArrayCollection();
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    public function getColunas(): Collection
    {
        return $this->coluna;
    }

    public function setColunas($coluna)
    {
        $this->coluna[] = $coluna;
    }
}
