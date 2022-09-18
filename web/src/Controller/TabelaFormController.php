<?php

namespace App\Controller;

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
        $form = $this->createForm(TabelaForm::class);
        $data['titulo'] = 'Add as tabelas';
        $data['form'] = $form;

        return $this->renderForm('form/tabela.html.twig', $data);

        //5: bootstrap
    }
}
