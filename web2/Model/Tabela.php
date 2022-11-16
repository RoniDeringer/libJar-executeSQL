<?php

namespace Model;

require_once "Model/Coluna.php";

class Tabela
{
    public $nome;
    public $coluna;

    public function addColuna(Coluna $coluna)
    {
        $this->coluna[] = $coluna;
    }

    public function __construct()
    {
        $this->coluna = array();
    }
}
