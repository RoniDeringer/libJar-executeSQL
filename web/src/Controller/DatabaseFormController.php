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
     * @Route("/form", name="formulario")
     */
    public function index(Request $request)
    {
        $database = new Database();
        $form = $this->createForm(DatabaseForm::class, $database);
        $form->handleRequest($request); //popula o objeto

        if ($form->isSubmitted()) {
            //proxima view
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
}
