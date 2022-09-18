<?php

namespace App\Entity;

use App\Repository\TabelaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabelaRepository::class)
 */
class Tabela
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

    /**
     * @ORM\OneToMany(targetEntity=Coluna::class, mappedBy="tabela")
     */
    public $coluna = [];

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
    /**
     * @return Collection<int, Coluna>
     */
    public function getColuna()
    {
        return $this->coluna;
    }

    public function setColuna($coluna)
    {
        $this->coluna = $coluna;
    }
}
