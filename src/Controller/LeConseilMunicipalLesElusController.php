<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeConseilMunicipalLesElusController extends AbstractController
{
    #[Route('/le-conseil-municipal/les-elus', name: 'les_elus')]
    public function index(): Response
    {
        return $this->render('laMairie/leConseilMunicipal/les_elus/index.html.twig', [
            'controller_name' => 'LeConseilMunicipalLesElusController',
        ]);
    }
}
