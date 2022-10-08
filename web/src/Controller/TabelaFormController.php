<?php

namespace App\Controller;

use App\Entity\Coluna;
use App\Entity\Tabela;
use App\Form\ColunaForm;
use App\Form\Submit;
use App\Form\TabelaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;

class TabelaFormController extends AbstractController
{
    /**
     * @Route("/form/tabela", name="tabela")
     */
    public function index()
    {

        $tabela = new Tabela();
        $tabela->setNome('tabela 1');

        $coluna = new Coluna();
        $coluna->setNome('coluna 1');
        $coluna->setTipo('Varchar(45)');
        $coluna->setIsNotNull(true);

        $tabela->setColuna($coluna);



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
