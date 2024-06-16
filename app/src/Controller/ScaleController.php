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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @IsGranted("ROLE_USER")
 */
class ScaleController extends AbstractController
{
    private $carsIdResult = [];
    private $session;
    private $finderCarDetails;


    public function __construct(SessionInterface $session, TransformedFinder $finderCarDetails)
    {
        $this->session = $session;

        $this->finderCarDetails = $finderCarDetails;
    }

    /**
     * @Route("/cars/comparing", name="comparing_list")
     */
    public function list(Request         $request,
                         ScaleRepository $scaleRepository,
    ): Response
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $compareCars = $scaleRepository->findBy([
            'user' => $user
        ]);
        $filter = new Filter();

        $filterForm = $this->createForm(FilterFormType::class, $filter);
        $filterForm->handleRequest($request);
        if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
            $this->session->clear();
        }
        if ($filterForm->isSubmitted() && $filterForm->isValid()) {
            $paramsList = [];
            $paramsList['fuelConsumption'] = $filterForm['consumption']->getData();
            $paramsList['power'] = $filterForm['power']->getData();
            $paramsList['age'] = $filterForm['age']->getData();
            $paramsList['tuning'] = $filterForm['tuning']->getData();

            foreach ($paramsList as $key=>$value) {
                if (isset($key) && $value != null) {
                    if (is_null($this->session->get($key))) {
                        $this->session->set($key, $value);

                        return new JsonResponse($this->searchField($key, $value));

                    } else {
                        $sess = $this->session->get($key);
                        if ($value != $sess) {
                            $this->session->set($key, $value);

                            return new JsonResponse($this->searchField($key, $value));
                        }
                    }
                }
            }
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

    public function searchField($param, $values): array
    {   $boolQuery = new Query\BoolQuery();
        $carsQueryList = $this->session->get('carsList');
       if($values == 'true' || $values == 'false' || $values == 'null'){

        $fieldQuery = new Query\MatchQuery();
        $fieldQuery->setFieldQuery($param, $values);
        $boolQuery->addMust($fieldQuery);
       } else{
           $values = explode('-', $values);
           $queryRange = new Query\Range();

        if ($values[1] === '<') {
            $queryRange->setParam(
                $param, [
                'lt' => $values[0]
            ]);
        } elseif ($values[1] === '>') {
            $queryRange->setParam(
                $param, [
                'gt' => $values[0]
            ]);
        } else {
            $queryRange->setParam(
                $param, [
                'gte' => $values[0],
                'lte' => $values[1]
            ]);
        }
        $boolQuery->addMust($queryRange);

       }

        $idQuery = new Query\Terms('_id', $carsQueryList);
        $boolQuery->addFilter($idQuery);
        $data = $this->finderCarDetails->find($boolQuery);

        if (!empty($data)) {
            foreach ($data as $carId)
                $this->carsIdResult[] = $carId->getId();
        }
        return [
            $this->carsIdResult,
            $param,
            $carsQueryList

        ];

    }

}
