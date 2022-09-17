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
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="integer")
     */
    private $porta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sgbd;

    /**
     * @ORM\OneToMany(targetEntity=Tabela::class, mappedBy="database")
     */
    private $tabela;

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
    public function getTabela(): Collection
    {
        return $this->tabela;
    }

    public function addTabela(Tabela $tabela)
    {
        if (!$this->tabela->contains($tabela)) {
            $this->tabela[] = $tabela;
            $tabela->setDatabase($this);
        }

        return $this;
    }

    public function removeTabela(Tabela $tabela): self
    {
        if ($this->tabela->removeElement($tabela)) {
            // set the owning side to null (unless already changed)
            if ($tabela->getDatabase() === $this) {
                $tabela->setDatabase(null);
            }
        }

        return $this;
    }
}
