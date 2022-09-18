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
}
