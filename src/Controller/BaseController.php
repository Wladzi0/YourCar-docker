<?php

namespace App\Controller;

use App\Entity\Engine;
use App\Entity\Fault;
use App\Entity\Image;
use App\Entity\SubModel;
use App\Entity\User;
use App\Form\FaultFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @IsGranted ("ROLE_USER")
 */
class BaseController extends AbstractController
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route ("/fault/add", name="fault_add")
     */
    public function userDefinedFault(Request $request, Session $session): Response
    {
        $engineId = $request->get('engine');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $fault = new Fault();
        $faultForm = $this->createForm(FaultFormType::class, $fault);
        $faultForm->handleRequest($request);

        if ($faultForm->isSubmitted() && $faultForm->isValid()) {
            $fault->setUser($user);
            $images = $faultForm->get('images')->getData();
            foreach ($images as $image) {
                $file = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('fault_images_directory'),
                    $file
                );
                $img = new Image();
                $img->setImage($file);
                $fault->addImage($img);

            }

            $em = $this->getDoctrine()->getManager();
            if ($engineId) {
                $engine = $em->getRepository(Engine::class)->findOneBy([
                    'id' => $engineId
                ]);
                $fault->addEngine($engine);


            } else {
                $subModel = $em->getRepository(SubModel::class)->findOneBy([
                    'id' => $request->get('subModel')
                ]);
                $fault->addSubModel($subModel);
            }
            $em->persist($fault);
            $em->flush();
            $request->getSession()
                ->getFlashBag()
                ->add('success', $this->translator->trans('Your request has been added successfully to queue'));
            $sessionUrl = $request->getSession()->get('url');

            $session->clear();
            if ($sessionUrl) {
                return new RedirectResponse($sessionUrl);
            }
        }

        return $this->render('car/catalog/fault/fault_form.html.twig', [
            'faultForm' => $faultForm->createView(),
        ]);

    }

    /**
     * @Route ("/session/add", name="add_session")
     */
    public function addToSession(Request $request, Session $session): JsonResponse
    {
        $session->set('url', $request->get('url'));

        return $this->json('success');
    }

    /**
     * @Route("/fault/image/{id}", name="delete_fault_image", methods={"DELETE"})
     */
    public function deleteImage(Image $image, Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            $name = $image->getFault();///
            unlink($this->getParameter('image_directory') . '/' . $name);
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error' => ' Token Invalid'], 400);
        }
    }


    /**
     * @Route("/language/add", name="add_language")
     */
    public function addLanguage(UserInterface $user): Response
    {
        $userLang = $user->getPreferLanguage();
        return new JsonResponse([
            'userLang'=>$userLang,
            'languages' => ['en','fr', 'uk']]);

    }

    /**
     * @Route("/language/change", name="change_language")
     */
    public function changeLanguage(Session $session, Request $request): Response
    {
        $user = $this->get('security.token_storage')
            ->getToken()->getUser();
        $changedLang = $request->get('language');
        $session->set('_locale', $changedLang);
        $user->setPreferLanguage($changedLang);
        $this->getDoctrine()->getManager()->flush();
        return new JsonResponse();

    }

}
