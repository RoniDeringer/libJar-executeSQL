<?php

namespace App\Controller;

use App\Form\ColunaForm;
use App\Form\Submit;
use App\Form\TabelaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TabelaFormController extends AbstractController
{
    /**
     * @Route("/form/tabela", name="tabela")
     */
    public function index()
    {
        $tabelaForm = $this->createForm(TabelaForm::class);
        $colunaForm = $this->createForm(ColunaForm::class);
        $submitForm = $this->createForm(Submit::class);

        //mete um js aqui
        $data['titulo'] = 'Add as tabelas';
        $data['form'] = $tabelaForm;

        return $this->renderForm('form/tabela.html.twig', $data);

        //5: bootstrap
    }
}
