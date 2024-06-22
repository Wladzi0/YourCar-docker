<?php

namespace App\Controller\User;

use App\DTO\FaultDTO;
use App\Entity\Car\Engine;
use App\Entity\Car\SubModel;
use App\Entity\Image;
use App\Entity\User;
use App\Form\FaultType;
use App\Service\User\FaultService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * @method User getUser()
 */
#[IsGranted('ROLE_USER')]
#[Route(path: '/faults')]
class FaultController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly FaultService $faultService,
    ) {
    }

    #[Route(path: '/add/engine/{id}', name: 'yourcar_fault_engine_add')]
    public function addForEngine(Request $request, Engine $engine): Response
    {
        $dto = new FaultDTO($this->getUser());

        $faultForm = $this->createForm(FaultType::class, $dto);
        $faultForm->handleRequest($request);

        if ($faultForm->isSubmitted() && $faultForm->isValid()) {
            $fault = $dto->createEntityByEngine($engine);
            $this->faultService->addImages($fault, $dto->images);

            $this->entityManager->persist($fault);
            $this->entityManager->flush();

            $this->addFlash('success', 'Your request has been added successfully to queue');

            return $this->redirectToRoute('yourcar_default');
        }

        return $this->render('user/car/fault/add.html.twig', [
            'faultForm' => $faultForm->createView(),
        ]);
    }

    #[Route(path: '/add/submodel/{id}', name: 'yourcar_fault_submodel_add')]
    public function addForSubModel(Request $request, SubModel $subModel): Response
    {
        $dto = new FaultDTO($this->getUser());

        $faultForm = $this->createForm(FaultType::class, $dto);
        $faultForm->handleRequest($request);

        if ($faultForm->isSubmitted() && $faultForm->isValid()) {
            $fault = $dto->createEntityBySubmodel($subModel);
            $this->faultService->addImages($fault, $dto->images);

            $this->entityManager->persist($fault);
            $this->entityManager->flush();

            $this->addFlash('success', 'Your request has been added successfully to queue');

            return $this->redirectToRoute('yourcar_default');
        }

        return $this->render('user/car/fault/add.html.twig', [
            'faultForm' => $faultForm->createView(),
        ]);
    }

    #[Route(path: '/image/{id}', name: 'delete_fault_image', methods: ['DELETE'])]
    public function deleteImage(Image $image, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);

        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            $name = $image->getFault();
            unlink($this->getParameter('image_directory') . '/' . $name);

            $this->entityManager->remove($image);
            $this->entityManager->flush();

            return new JsonResponse([
                'success' => 1,
            ]);
        }

        return new JsonResponse([
            'error' => ' Token Invalid',
        ], 400);
    }
}
