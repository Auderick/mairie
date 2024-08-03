<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatrimoineMazerollesController extends AbstractController
{
    #[Route('/patrimoine/mazerolles', name: 'patrimoine_mazerolles')]
    public function index(): Response
    {
        return $this->render('mazerolles/patrimoine_mazerolles/index.html.twig', [
            'controller_name' => 'PatrimoineMazerollesController',
        ]);
    }
}
