<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouveauxArrivantsMazerollesController extends AbstractController
{
    #[Route('/nouveaux-arrivants/mazerolles', name: 'nouveaux_arrivants_mazerolles')]
    public function index(): Response
    {
        return $this->render('mazerolles/nouveaux_arrivants_mazerolles/index.html.twig', [
            'controller_name' => 'NouveauxArrivantsMazerollesController',
        ]);
    }
}
