<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeBudgetController extends AbstractController
{
    #[Route('/le-budget', name: 'le_budget')]
    public function index(): Response
    {
        return $this->render('laMairie/leBudget/index.html.twig', [
            'controller_name' => 'LeBudgetController',
        ]);
    }
}
