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
        $coluna2 = new Coluna();

        $tabela->getColunas()->add($coluna1);
        $tabela->getColunas()->add($coluna2);

        $form = $this->createForm(TabelaForm::class, $tabela);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... do your form processing, like saving the Task and Tag entities
        }

        if ($form->isSubmitted()) {
            //proxima view  MEU OBJETO POPULADO, VAI JUNTO?
            //salvar o objeto atual num array e criar um novo objeto

            $rota = 'newTable';

            if ($rota == 'newTable') {
                $url = '/form/tabela';
            } else {
                $url = '/export';
            }


            header('Location: ' . $url);
            exit;
        }

        return $this->renderForm('form/tabela.html.twig', [
        'form' => $form,
        ]);
    }
}

//33 minutos de video
