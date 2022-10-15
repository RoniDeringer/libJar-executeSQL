<?php

namespace App\Controller;

use App\Entity\Database;
use App\Form\DatabaseForm;
use App\Repository\DatabaseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\EntityRepositoryGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DatabaseFormController extends AbstractController
{
    /**
     * @Route("/", name="formulario")
     */
    public function index(Request $request)
    {
        $database = new Database();
        $form = $this->createForm(DatabaseForm::class, $database);
        $form->handleRequest($request); //popula o objeto

        if ($form->isSubmitted()) {
            //proxima view  MEU OBJETO POPULADO, VAI JUNTO?
            $url = '/form/tabela';
            header('Location: ' . $url);
            exit;
        }


        $data['titulo'] = 'Add novo banco';
        $data['form'] = $form;

        return $this->renderForm('form/database.html.twig', $data);

        //5 . 18:00
    }


    /**
     * @Route("/teste", name="database_index")
    */
    public function teste()
    {

        $database = new Database();
        $tabela = new \App\Entity\Tabela();
        $coluna = new \App\Entity\Coluna();
        $coluna2 = new \App\Entity\Coluna();


        //COLUNAS
        $coluna->setNome('coluna 1');
        $coluna->setTipo('int');
        $coluna->setIsNotNull(true);

        $coluna2->setNome('coluna 2');
        $coluna2->setTipo('varchar(45)');
        $coluna2->setIsNotNull(true);


        //TABELA

        $tabela->setNome('alunos');
        $tabela->getColunas()->add($coluna);
        $tabela->getColunas()->add($coluna2);


        //DATABASE

        $database->setNome('alunos_ifc');
        $database->setPorta(3000);
        $database->setUrl('3000');
        $database->setUsuario('root');
        $database->setSenha('12345');
        $database->setSgbd('MYSQL');
        $database->setTabela($tabela);


        $json = $database->convertJson($database);

        // echo $json;

        $database->downloadJson($json);


        // var_dump($database);

        // $database->exportJson($database);



        $form = $this->createForm(DatabaseForm::class, $database);

        $data['form'] = $form;
        $data['titulo'] = 'testeform';

        return $this->renderForm('form/database.html.twig', $data);


        // $bytes = file_put_contents("myfile.json", $json);

    //https://github.com/karolispx/php-generate-json-file/blob/master/generate-json.php
    //https://stackoverflow.com/questions/17903484/symfony2-how-to-force-download-in-ajax-return-json-datatype
    }
}
