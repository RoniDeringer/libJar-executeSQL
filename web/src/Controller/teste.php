<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TesteController extends AbstractController
{
    public function index(): Response
    {
        return new Response();
    }
}
