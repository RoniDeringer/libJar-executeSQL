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
     * @Route("/tabela", name="tabela")
     */
    public function index(Request $request): Response
    {
        $tabela = new Tabela();
        $coluna = new Coluna();
        $tabela->getColunas()->add($coluna);
        $form = $this->createForm(TabelaForm::class, $tabela);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();

            $url = $form->getClickedButton() === $form->get('exportJson') ? 'export' : '/form';

            return $this->redirectToRoute($url, [$tabela]);

            header('Location: ' . $url);
            exit;
        }

        return $this->renderForm('form/tabela.html.twig', [
        'form' => $form
        ]);
    }


    /**
     * @Route("/export", name="export")
     */
    public function exportJson(Request $request)
    {
        // $teste = $this->getOptions(['context']);
        var_dump($request->getContent()) ;

        // $json = $database->convertJson($database);
        // $database->downloadJson($json);
    }
}

//33 minutos de video
