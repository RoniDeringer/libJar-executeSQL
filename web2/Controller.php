<?php

namespace Controller;

use LengthException;

require_once "Model/Database.php";
require_once "Model/Tabela.php";
require_once "Model/Coluna.php";

session_start();
$acao = isset($_POST['button']) ? $_POST['button'] : '';

switch ($acao) {
    case 'database':
        $_SESSION['database'] = getDatabase();
        header('Location: TabelaColunaForm.php');
        break;

    case 'newTable':
        $_SESSION['database']->addTabela(getTabela());
        header('Location: TabelaColunaForm.php');
        break;

    case 'exportJson':
        $_SESSION['database']->addTabela(getTabela());
        exportJson();
        break;

    case 'viewJson':
        $_SESSION['database']->addTabela(getTabela());
        header('Location: viewJson.php');
        break;
}

//fazer um array quando recebe no nova tabela e no export



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
    $tabela = new \Model\Tabela();

    $tabela->nome = $_POST['nomeTabela'];

    $lengthColumn = count($_POST['nomeColuna']);

    for ($i = 0; $i < $lengthColumn; $i++) {
        $coluna = new \Model\Coluna();
        $coluna->nome = $_POST['nomeColuna'][$i];
        $coluna->tipo = $_POST['tipo'][$i];
        $coluna->isNotNull = $_POST['notnull'][$i];
        $coluna->isPK = $_POST['pk'][$i];

        $tabela->addColuna($coluna);
    }

    return $tabela;
}

function exportJson()
{
    $json = convertJson($_SESSION['database']);

    $filename = 'generated_json_' . date('Y-m-d H:i:s');

    header("Content-type: application/vnd.ms-excel");
    header("Content-Type: application/force-download");
    header("Content-Type: application/download");
    header("Content-disposition: " . $filename . ".json");
    header("Content-disposition: filename=" . $filename . ".json");

    print $json;
    exit;
}

function convertJson($object)
{
    // var_dump(json_encode($object));
    return json_encode($object);
}
