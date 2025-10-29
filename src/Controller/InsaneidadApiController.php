<?php

namespace App\Controller;


use App\Model\Insaneidad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InsaneidadApiController extends AbstractController
{
    #[Route('api/insaneidades')]
    public function getInsaneidad(): Response
    {
        $insaneidades = [
            new Insaneidad(
                1,
                'Tromi',
                'Mongolico',
                'Dead',
                20,
            ),
            new Insaneidad(
                2,
                'Sushi',
                'Cueck',
                'Alive',
                30,
            ),
            new Insaneidad(
                3,
                'Nacho',
                'Gurt',
                'Dead',
                21
            ),
        ];

        return $this->json($insaneidades);
    }
}
