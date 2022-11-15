<?php

namespace src\Controller;

require_once "Model/Database.php";

session_start();

$acao = isset($_POST['url']) ? 'database' : 'tabela';

if ($acao == "database") {
    $_SESSION['database'] = getDatabase();
    header('Location: coluna.php');
}

var_dump($database);


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
