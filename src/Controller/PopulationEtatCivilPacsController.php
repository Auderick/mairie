<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PopulationEtatCivilPacsController extends AbstractController
{
    #[Route('/population-etat-civil/pacs', name: 'pacs')]
    public function index(): Response
    {
        return $this->render('services/populationEtatCivil/pacs/index.html.twig', [
            'controller_name' => 'PopulationEtatCivilPacsController',
        ]);
    }
}
