<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeConseilMunicipalDeliberationsController extends AbstractController
{
    #[Route('/le-conseil-municipal/deliberations', name: 'deliberations')]
    public function index(): Response
    {
        return $this->render('laMairie/leConseilMunicipal/deliberations/index.html.twig', [
            'controller_name' => 'LeConseilMunicipalDeliberationsController',
        ]);
    }

    #[Route('/le-conseil-municipal/deliberations/annee', name: 'deliberations/annee')]
    public function annee(): Response
    {
        return $this->render('laMairie/leConseilMunicipal/deliberations/annee/index.html.twig', [
            'controller_name' => 'LeConseilMunicipalDeliberationsController',
        ]);
    }
}



