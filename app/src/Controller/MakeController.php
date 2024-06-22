<?php

namespace App\Controller;

use App\Entity\Car\Engine;
use App\Entity\Car\Make;
use App\Entity\Car\Model;
use App\Entity\Car\SubModel;
use App\Entity\Fault;
use App\Entity\User;
use App\Repository\Car\MakeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route(path: '/makes')]
class MakeController extends AbstractController
{
    public function __construct(
        private readonly MakeRepository $makeRepository,
    ) {
    }

    #[Route(path: '/list', name: 'yourcar_make_list')]
    public function makeList(): Response
    {
        return $this->render('car/catalog/make/list.html.twig', [
            'makes' => $this->makeRepository->findAll(),
        ]);
    }

    #[Route(path: '/{make}/models/list', name: 'yourcar_make_model_list')]
    public function modelList(Make $make): Response
    {
        return $this->render('car/catalog/model/list.html.twig', [
            'models' => $make->getModels(),
        ]);
    }

    #[Route(path: '/{make}/model/{model}', name: 'yourcar_make_model_show')]
    public function modelShow(Model $model): Response
    {
        return $this->render('car/catalog/model/show.html.twig', [
            'model' => $model,
        ]);
    }

    #[Route(path: '/{make}/model/{model}/submodel/{subModel}', name: 'yourcar_make_model_submodel_show')]
    public function subModelShow(SubModel $subModel): Response
    {
        return $this->render('car/catalog/subModel/show.html.twig', [
            'subModel' => $subModel,
        ]);
    }

    /**
     * @method User getUser|null
     */
    #[Route(path: '/{make}/model/{model}/submodel/{subModel}/engine/{engine}/details', name: 'yourcar_make_model_submodel_engine_show')]
    public function showByEngine(SubModel $subModel, Engine $engine): Response
    {
        if (count($engine->getRatings()) > 0) {
            $sum = array_reduce($engine->getRatings()->toArray(), static fn ($carry, $rating): float|int|array => $carry + $rating->getRating(), 0);

            $averageRating = $sum / count($engine->getRatings());
        } else {
            $averageRating = 0;
        }

        return $this->render('car/catalog/subModel/show_by_engine.html.twig', [
            'average_rating' => $averageRating,
            'rating_count' => count($engine->getRatings()),
            'rated_by_user' => $this->getUser() instanceof UserInterface ? $engine->getRatings()->exists(fn ($key, $rating): bool => $rating->getUser() === $this->getUser()) : 0,
            'sub_model' => $subModel,
            'engine' => $engine,
        ]);
    }

    #[Route(path: '/{make}/model/{model}/submodel/{subModel}/fault/{fault}', name: 'yourcar_make_submodel_fault_show')]
    public function faultShow(Fault $fault): Response
    {
        return $this->render('car/catalog/subModel/fault.show.html.twig', [
            'fault' => $fault,
        ]);
    }
}
