<?php

namespace App\Entity;

use App\Repository\DatabaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DatabaseRepository::class)
 */
class Database
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $url;

    /**
     * @ORM\Column(type="integer")
     */
    public $porta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $usuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $senha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $sgbd;

    /**
     * @ORM\OneToMany(targetEntity=Tabela::class, mappedBy="database")
     */
    public $tabela;

    public function __construct()
    {
        $this->tabela = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        return $this->url = $url;
    }

    public function getPorta(): ?int
    {
        return $this->porta;
    }

    public function setPorta(int $porta)
    {
         return $this->porta = $porta;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario)
    {
        return $this->usuario = $usuario;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getSgbd(): ?string
    {
        return $this->sgbd;
    }

    public function setSgbd(string $sgbd)
    {
        return $this->sgbd = $sgbd;
    }

    /**
     * @return Collection<int, Tabela>
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    public function setTabela(Tabela $tabela)
    {
        $this->tabela = $tabela;
    }


    // public function addTabela(Tabela $tabela)
    // {
    //     if (!$this->tabela->contains($tabela)) {
    //         $this->tabela[] = $tabela;
    //         $tabela->setDatabase($this);
    //     }

    //     return $this;
    // }

    // public function removeTabela(Tabela $tabela): self
    // {
    //     if ($this->tabela->removeElement($tabela)) {
    //         // set the owning side to null (unless already changed)
    //         if ($tabela->getDatabase() === $this) {
    //             $tabela->setDatabase(null);
    //         }
    //     }

    //     return $this;
    // }



    public function exportJson($object)
    {
        $json = json_encode($object);

        $filename = 'generated_json_' . date('Y-m-d');

        // Force download .json file with JSON in it
        header("Content-type: application/vnd.ms-excel");
        header("Content-Type: application/force-download");
        header("Content-Type: application/download");
        header("Content-disposition: " . $filename . ".json");
        header("Content-disposition: filename=" . $filename . ".json");

        print $json;
        exit;
    }
}
