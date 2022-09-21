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
     * @ORM\OneToMany(targetEntity="Coluna", mappedBy="tabela")
     * @var Coluna[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public $coluna;



    public function __construct()
    {
        $this->coluna = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Coluna[]
     */
    public function getColuna()
    {
        return $this->coluna;
    }

    public function setColuna($coluna)
    {
        $this->coluna[] = $coluna;
    }
}
