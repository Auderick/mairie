<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElectionsController extends AbstractController
{
    #[Route('mairie/elections', name: 'elections')]
    public function index(): Response
    {
        return $this->render('laMairie/elections/index.html.twig', [
            'controller_name' => 'ElectionsController',
        ]);
    }
}
