<?php

namespace App\Controller;

use App\Entity\Database;
use App\Form\DatabaseForm;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\EntityRepositoryGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

require_once('DatabaseFormController.php');

$teste = new \App\Controller\DatabaseFormController();
$teste->teste();

class DatabaseFormController extends AbstractController
{
    /**
     * @Route("/", name="database_index")
    */
    public function teste()
    {

        $database = new Database();
        $tabela = new \App\Entity\Tabela();
        $coluna = new \App\Entity\Coluna();
        $coluna2 = new \App\Entity\Coluna();



        //COLUNAS
        $coluna->setNome('id');
        $coluna->setTipo('int');
        $coluna->setIsNotNull(true);

        $coluna2->setNome('nome');
        $coluna2->setTipo('varchar(45)');
        $coluna2->setIsNotNull(true);


        //TABELA

        $tabela->addColuna($coluna);
        $tabela->addColuna($coluna2);


        //DATABASE

        $database->setNome('alunos_ifc');
        $database->setUrl(3000);
        $database->setUsuario('root');
        $database->setSenha('12345');
        $database->setSgbd('MYSQL');
        $database->addTabela($tabela);

        $json = json_encode($database);
        $bytes = file_put_contents("myfile.json", $json);
        echo $json;
    }

    /**
     * @Route("/", name="database_list")
    */
    public function list()
    {
        $form = $this->createForm(DatabaseForm::class);
        $data['novo banco'] = 'Add novo banco';
        $data['form'] = $form;

        return $this->renderForm('database/form.html.twig', $data);

        //5 . 18:00
    }
}
