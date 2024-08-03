<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationMazerollesController extends AbstractController
{
    #[Route('/presentation/mazerolles', name: 'presentation_mazerolles')]
    public function index(): Response
    {
        return $this->render('mazerolles/presentation_mazerolles/index.html.twig', [
            'controller_name' => 'PresentationMazerollesController',
        ]);
    }
}
