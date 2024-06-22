<?php

namespace App\Controller\User;

use App\Entity\Car\Engine;
use App\Entity\Fault;
use App\Service\User\RatingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route(path: '/engines')]
class EngineController extends AbstractController
{
    public function __construct(
        private readonly RatingService $engineService,
    ) {
    }

    #[Route(path: '/fault/{fault}', name: 'yourcar_engine_fault_show')]
    public function faultShow(Fault $fault): Response
    {
        return $this->render('car/catalog/fault/show.html.twig', [
            'fault' => $fault,
        ]);
    }

    #[Route(path: '/{id}', name: 'yourcar_engine_show')]
    public function engineDetails(Engine $engine): Response
    {
        $dto = $this->engineService->getEngineRating($engine);

        return $this->render('car/catalog/engine/show.html.twig', [
            'average_rating' => $dto->averageRating,
            'rating_count' => $dto->ratingCount,
            'engine' => $engine,
            'faults' => $engine->getPublishedFaults(),
        ]);
    }
}
