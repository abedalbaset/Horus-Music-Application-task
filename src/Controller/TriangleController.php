<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'app_triangle'  , methods: ['GET', 'HEAD'])]
    public function index($a,$b,$c): JsonResponse
    {
        $s_var = ($a+$b+$c)/2;
        $triangle_area = round(sqrt(($s_var)*($s_var-$a)*($s_var-$b)*($s_var-$c)),1);

        return $this->json([
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,

            'surface' => $triangle_area,
            'circumference' => $s_var*2,

        ]);
    }
}
