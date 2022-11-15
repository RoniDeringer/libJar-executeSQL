<?php

namespace src\Controller;

require_once "Database.php";

$database = new \Model\Database();

    $database->nome = $_POST['nome'];
    $database->url = $_POST['url'];
    $database->porta = $_POST['porta'];
    $database->usuario = $_POST['usuario'];
    $database->senha = $_POST['senha'];
    $database->sgbd = $_POST['sgbd'];
    var_dump($database);
