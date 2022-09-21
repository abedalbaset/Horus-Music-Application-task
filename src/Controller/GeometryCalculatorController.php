<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeometryCalculatorController extends AbstractController
{
    #[Route('/', name: 'app_geometry_calculator')]
    public function index(): Response
    {
        return $this->render('main.html.twig', [
            'controller_name' => 'GeometryCalculatorController',
        ]);
    }
}
