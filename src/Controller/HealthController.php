<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/health', name: 'heathCheck', methods: ['GET'])]
    public function healthCheck(): JsonResponse
    {
        return new JsonResponse('We are good to go', Response::HTTP_OK);
    }
}