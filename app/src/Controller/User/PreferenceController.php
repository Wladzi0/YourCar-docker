<?php

namespace App\Controller\User;

use App\DTO\UserSettingDTO;
use App\Entity\User;
use App\Form\UserSettingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * @method User getUser()
 */
#[IsGranted('ROLE_USER')]
#[Route('/preferences')]
class PreferenceController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route(path: '/', name: 'yourcar_preferences_change')]
    public function change(Request $request, Session $session): Response
    {
        $dto = new UserSettingDTO($this->getUser());
        $settingsForm = $this->createForm(UserSettingType::class, $dto);
        $settingsForm->handleRequest($request);

        if ($settingsForm->isSubmitted() && $settingsForm->isValid()) {
            $dto->updateUserPreferences();
            $this->entityManager->flush();

            $preference = $this->getUser()->getPreference();

            if ($preference) {
                $session->set('_locale', $preference->getLanguage());
            }

            return new Response(json_encode([
                'status' => 'success',
            ], JSON_THROW_ON_ERROR));
        }

        return $this->render('preference/settings.html.twig', [
            'settingsForm' => $settingsForm->createView(),
        ]);
    }

    #[Route(path: '/reset', name: 'yourcar_preferences_reset')]
    public function delete(): Response
    {
        $preference = $this->getUser()->getPreference();

        if ($preference === null) {
            return $this->json(
                [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => 'any setting were found',
                ]
            );
        }

        $preference->setLanguage('en');
        $preference->setCarType(null);
        $preference->setTuning(null);
        $preference->setFuelConsumption(null);

        $this->entityManager->flush();

        return $this->json(
            [
                'code' => Response::HTTP_RESET_CONTENT,
                'message' => 'settings have been reset',
            ]
        );
    }
}
