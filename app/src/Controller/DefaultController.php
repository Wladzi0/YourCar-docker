<?php

namespace App\Controller;

use App\Repository\Car\ModelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    public function __construct(
        private readonly ModelRepository $modelRepository,
    ) {
    }

    //FIXME: control panel
    #[Route(path: '/', name: 'yourcar_default')]
    public function homepage(): Response
    {
        return $this->render('main/index.html.twig', [
            'models' => $this->modelRepository->findAll(),
        ]);
    }
}
