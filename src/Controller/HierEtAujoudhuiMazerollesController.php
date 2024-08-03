<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HierEtAujoudhuiMazerollesController extends AbstractController
{
    #[Route('/hier-et-aujourd-hui/mazerolles', name: 'hier_et_aujourdhui_mazerolles')]
    public function index(): Response
    {
        return $this->render('mazerolles/hier_et_aujourdhui_mazerolles/index.html.twig', [
            'controller_name' => 'HierEtAujourdhuiMazerollesController',
        ]);
    }
}
