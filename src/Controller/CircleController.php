<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle', methods: ['GET', 'HEAD'] )]
    public function index($radius): JsonResponse
    {
        $area = 2*round(pi(),2)*($radius);
        $area = number_format($area, 2); 

        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $area,
            'circumference' => $area,


        ]);
    }
}
