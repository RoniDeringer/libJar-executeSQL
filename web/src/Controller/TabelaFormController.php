<?php

namespace App\Controller;

use App\Entity\Coluna;
use App\Entity\Tabela;
use App\Form\ColunaForm;
use App\Form\Submit;
use App\Form\TabelaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TabelaFormController extends AbstractController
{
    /**
     * @Route("/tabela", name="tabela")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {

        $tabela = new Tabela();


        $form = $this->createForm(TabelaForm::class, $tabela);
        // $tabelaForm->handleRequest($request);

        //mete um js aqui
        // $data['titulo'] = 'Add as tabelas';
        // $data['form'] = $tabelaForm;



        return $this->render('form/tabela.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

//33 minutos de video
