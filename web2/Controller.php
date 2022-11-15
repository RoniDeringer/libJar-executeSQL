<?php

namespace src\Controller;

require_once "Model/Database.php";
require_once "Model/Tabela.php";
require_once "Model/Coluna.php";

session_start();

$acao = isset($_POST['url']) ? 'database' : 'tabela';

if ($acao == "database") {
    $_SESSION['database'] = getDatabase();
    header('Location: coluna.php');
} else {
    $_SESSION['tabela'] = getTabela();
    // var_dump($_SESSION['tabela']);
    $objeto = $_SESSION['database'];
    $objeto->addTabela($_SESSION['tabela']);
    var_dump($objeto);
}


function getDatabase()
{
    $database = new \Model\Database();
    $database->nome = $_POST['nome'];
    $database->url = $_POST['url'];
    $database->porta = $_POST['porta'];
    $database->usuario = $_POST['usuario'];
    $database->senha = $_POST['senha'];
    $database->sgbd = $_POST['sgbd'];
    return $database;
}

function getTabela()
{
    $coluna = new \Model\Coluna();
    $coluna->nome = $_POST['nomeColuna'];
    $coluna->tipo = $_POST['tipo'];

    if (isset($_POST['notnull'])) {
        $coluna->isNotNull = true;
    }

    if (isset($_POST['pk'])) {
        $coluna->isPK = true;
    }

    $tabela = new \Model\Tabela();
    $tabela->nome = $_POST['nomeTabela'];
    $tabela->addColuna($coluna);
    return $tabela;
}
