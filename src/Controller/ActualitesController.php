<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    #[Route('/actualites', name: 'les-actualites')]
    public function index(): Response
    {
        return $this->render('actualites/les-actualites.html.twig', [
            'controller_name' => 'ActualitesController',
        ]);
    }

}
