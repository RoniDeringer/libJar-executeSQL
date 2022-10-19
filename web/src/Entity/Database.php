<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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

    public $tabela;

    public function __construct()
    {
        $this->tabela = new ArrayCollection();
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        return $this->url = $url;
    }

    public function getPorta()
    {
        return $this->porta;
    }

    public function setPorta(int $porta)
    {
         return $this->porta = $porta;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario)
    {
        return $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getSgbd()
    {
        return $this->sgbd;
    }

    public function setSgbd(string $sgbd)
    {
        return $this->sgbd = $sgbd;
    }

    public function getTabela(): Collection
    {
        return $this->tabela;
    }

    public function setTabela(Tabela $tabela)
    {
        $this->tabela[] = $tabela;
    }


    public function downloadJson($json)
    {
        $filename = 'generated_json_' . date('Y-m-d H:i:s');

        // Force download .json file with JSON in it
        header("Content-type: application/vnd.ms-excel");
        header("Content-Type: application/force-download");
        header("Content-Type: application/download");
        header("Content-disposition: " . $filename . ".json");
        header("Content-disposition: filename=" . $filename . ".json");

        print $json;
        exit;
    }

    public function convertJson($object)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        return $serializer->serialize($object, 'json');
    }
}
