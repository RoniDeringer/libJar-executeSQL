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
     * @ORM\OneToMany(targetEntity=Coluna::class, mappedBy="tabela")
     */
    private $coluna;

    /**
     * @ORM\ManyToOne(targetEntity=Database::class, inversedBy="tabela")
     * @ORM\JoinColumn(nullable=false)
     */
    private $database;

    public function __construct()
    {
        $this->coluna = new ArrayCollection();
    }

    public function getId(): ?int
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
     * @return Collection<int, Coluna>
     */
    public function getColuna(): Collection
    {
        return $this->coluna;
    }

    public function addColuna(Coluna $coluna): self
    {
        if (!$this->coluna->contains($coluna)) {
            $this->coluna[] = $coluna;
            $coluna->setTabela($this);
        }

        return $this;
    }

    public function removeColuna(Coluna $coluna): self
    {
        if ($this->coluna->removeElement($coluna)) {
            // set the owning side to null (unless already changed)
            if ($coluna->getTabela() === $this) {
                $coluna->setTabela(null);
            }
        }

        return $this;
    }

    public function getDatabase(): ?Database
    {
        return $this->database;
    }

    public function setDatabase(?Database $database): self
    {
        $this->database = $database;

        return $this;
    }
}
