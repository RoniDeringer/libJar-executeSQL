<?php

namespace App\Controller;

use App\Entity\Coluna;
use App\Entity\Tabela;
use App\Form\ColunaForm;
use App\Form\Submit;
use App\Form\TabelaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabelaFormController extends AbstractController
{
    /**
     * @Route("/form/tabela", name="tabela")
     */
    public function index(Request $request): Response
    {
        $tabela = new Tabela();
        $coluna1 = new Coluna();
        $tabela->getColunas()->add($coluna1);
        $form = $this->createForm(TabelaForm::class, $tabela);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->getClickedButton() === $form->get('exportJson')) {
                $url = '/export';
            } else {
                $url = '/form/tabela';
            }
            header('Location: ' . $url);
            exit; //pra que serve?
        }


        return $this->renderForm('form/tabela.html.twig', [
        'form' => $form
        ]);
    }
}

//33 minutos de video
