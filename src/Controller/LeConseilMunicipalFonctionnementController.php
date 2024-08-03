<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeConseilMunicipalFonctionnementController extends AbstractController
{
    #[Route('/le-conseil-municipal/fonctionnement', name: 'fonctionnement')]
    public function index(): Response
    {
        return $this->render('laMairie/leConseilMunicipal/fonctionnement/index.html.twig', [
            'controller_name' => 'LeConseilMunicipalFonctionnementController',
        ]);
    }
}
