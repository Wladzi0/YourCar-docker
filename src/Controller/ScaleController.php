<?php

namespace App\Controller;

use App\Entity\CarDetails;
use App\Entity\Filter;
use Elastica\Query;
use App\Entity\Scale;
use App\Form\FilterFormType;
use App\Repository\ScaleRepository;
use FOS\ElasticaBundle\Finder\TransformedFinder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
class ScaleController extends AbstractController
{
    /**
     * @Route("/cars/comparing", name="comparing_list")
     */
    public function list(Request          $request,
                         ScaleRepository  $scaleRepository,
                         TransformedFinder $finderCarDetails
    ): Response
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $compareCars = $scaleRepository->findBy([
            'user' => $user
        ]);
        $filter = new Filter();
        $filterForm = $this->createForm(FilterFormType::class, $filter);

        $filterForm->handleRequest($request);
        if ($filterForm->isSubmitted() && $filterForm->isValid()) {
            $consump=$filterForm['consumption']->getData();
            $power=$filterForm['power']->getData();
            $age=$filterForm['age']->getData();
            $tuning=$filterForm['tuning']->getData();


            $boolQuery = new Query\BoolQuery();
            $fieldQuery = new Query\MatchQuery();
            $fieldQuery->setField('fuelConsumption', '9');
            $boolQuery->addMust($fieldQuery);
            $idQuery = new Query\Terms('_id', ['21','22','23']);
            $boolQuery->addFilter($idQuery);
            $data = $finderCarDetails->find($boolQuery);
            return $this->render('search_filter/paginator.html.twig',[
                'data'=>$data ]);
        }
        $date = new \DateTime();
        $age = $date->format('Y');
        return $this->render('comparing/list.html.twig', [
            'filterForm' => $filterForm->createView(),
            'cars' => $compareCars,
            'age' => $age,
            'included' => true
        ]);
    }

    /**
     * @Route("/car/{id}/comparing", name="comparing")
     */
    public function comparing(
        CarDetails      $car,
        ScaleRepository $scaleRepository
    ): Response
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        if ($car->isScaledByUser($user)) {
            $scaled = $scaleRepository->findOneBy([
                'user' => $user,
                'carDetails' => $car
            ]);
            $em->remove($scaled);
            $em->flush();

            return $this->json([
                'code' => 200,
                'message' => 'was deleted from scale successfully'
            ]);
        } else {
            $scale = new Scale();
            $scale->setUser($user);
            $scale->setCarDetails($car);
            $em->persist($scale);
            $em->flush();

            return $this->json([
                'code' => 201,
                'message' => "success add to scale"
            ]);
        }
    }


}
