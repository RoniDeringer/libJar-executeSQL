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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

    /**
     * @ORM\OneToMany(targetEntity="Coluna", mappedBy="tabela")
     */
    public $coluna;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coluna = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

        /**
     * Add coluna
     *
     * @param \App\Entity\Coluna $coluna
     *
     * @return Tabela
     */
    public function addColuna(\App\Entity\Coluna $coluna)
    {
        $this->coluna[] = $coluna;
        // setting the current user to the $exp,
        // adapt this to whatever you are trying to achieve
        $coluna->setTabela($this);
        return $this;
    }
}
