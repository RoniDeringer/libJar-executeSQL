<?php

namespace Model;

require_once "Model/Tabela.php";

class Database
{
    public $nome;
    public $url;
    public $porta;
    public $usuario;
    public $senha;
    public $sgbd;
    public $tabela;

    public function __construct()
    {
        $this->tabela = array();
    }
    public function addTabela(Tabela $tabela)
    {
        $this->tabela[] = $tabela;
    }
}
