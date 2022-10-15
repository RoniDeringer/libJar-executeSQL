<?php

namespace App\Controller;

use App\Entity\Coluna;
use App\Entity\Group;
use App\Entity\Tabela;
use App\Form\ColunaForm;
use App\Form\GroupForm;
use App\Form\Submit;
use App\Form\TabelaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupFormController extends AbstractController
{
    /**
     * @Route("/form", name="group")
     */
    public function index(Request $request): Response
    {

        $group = new Group();
        $tabela = new Tabela();

        $group->getTabelas()->add($tabela);

        $form = $this->createForm(GroupForm::class, $group);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... do your form processing, like saving the Task and Tag entities
        }

        return $this->renderForm('form/group.html.twig', [
            'form' => $form,
        ]);
    }
}
