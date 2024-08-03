<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PopulationEtatCivilMariageController extends AbstractController
{
    #[Route('/population-etat-civil/mariage', name: 'mariage')]
    public function index(): Response
    {
        return $this->render('services/populationEtatCivil/mariage/index.html.twig', [
            'controller_name' => 'PopulationEtatCivilMariageController',
        ]);
    }
}
