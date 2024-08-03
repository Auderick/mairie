<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IntercommunaliteController extends AbstractController
{
    #[Route('/intercommunalite', name: 'intercommunalite')]
    public function index(): Response
    {
        return $this->render('laMairie/intercommunalite/index.html.twig', [
            'controller_name' => 'IntercommunaliteController',
        ]);
    }
}
