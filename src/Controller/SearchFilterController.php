<?php

namespace App\Controller;

use App\Entity\Make;
use App\Repository\MakeRepository;
use Elastica\Query;
use FOS\ElasticaBundle\Finder\TransformedFinder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;


///**
// * @Route("/{_locale}", name="search_part1_", requirements={"_locale"="%locales_requirements%"})
// */
//final class SearchFilterController extends AbstractController
//{
//    /**
//     * @Route({"en": "/part1/search", "fr": "/partie1/recherche"}, name="main")
//     */
//    public function filter(Request $request,SessionInterface $session, TransformedFinder $subModelFinder): Response
//    {
//        $q = $request->query->get('q','');
//        $results = !empty($q) ? $subModelFinder->findHybrid(Util::escapeTerm($q)) : [];
//        $session->set('q',$q);
//
//        return $this->render('search_filter/index.html.twig',[
//            compact('results','q'
//        )]);
//    }
//}

final class SearchFilterController extends AbstractController
{
    private $finderCars;

    private $translator;

    public function __construct(TransformedFinder $finderCars, TranslatorInterface $translator)
    {
        $this->translator = $translator;
        $this->finderCars = $finderCars;
    }




    // /**
    //  * @Route("/api/users", name="users", methods={"GET"})
    //  */
    // public function getUsers(): Response
    // {
    //     $users = [
    //         [
    //             'id' => 1,
    //             'name' => 'Olususi Oluyemi',
    //             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
    //             'imageURL' => 'https://randomuser.me/api/portraits/women/50.jpg'
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'Camila Terry',
    //             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
    //             'imageURL' => 'https://randomuser.me/api/portraits/men/42.jpg'
    //         ],
    //         [
    //             'id' => 3,
    //             'name' => 'Joel Williamson',
    //             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
    //             'imageURL' => 'https://randomuser.me/api/portraits/women/67.jpg'
    //         ],
    //         [
    //             'id' => 4,
    //             'name' => 'Deann Payne',
    //             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
    //             'imageURL' => 'https://randomuser.me/api/portraits/women/50.jpg'
    //         ],
    //         [
    //             'id' => 5,
    //             'name' => 'Donald Perkins',
    //             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
    //             'imageURL' => 'https://randomuser.me/api/portraits/men/89.jpg'
    //         ]
    //     ];
    //
    //     $response = new Response();
    //
    //     $response->headers->set('Content-Type', 'application/json');
    //     $response->headers->set('Access-Control-Allow-Origin', '*');
    //
    //     $response->setContent(json_encode($users));
    //
    //     return $response;
    // }
    // /**
    //  * @param Request $request
    //  * @param TransformedFinder $finderModel
    //  * @Route("/search", name="search", methods={"GET"})
    //  */
    // public function searchAction(Request $request, TransformedFinder $finderModel)
    // {
    //
    //     $data = $request->get("query");
    //     // $query='bm';
    //     $query = json_decode($request->getContent(),true);
    //
    //       // var_dump($query);
    //     $carsList = [];
    //     $searchQuery = new Query\QueryString($query . '*');
    //     $searchQuery->setDefaultOperator('OR');
    //     $searchQuery->setFields(['name', 'make']);
    //     $searchQuery->setRewrite('constant_score');
    //     $results = $finderModel->find($searchQuery);
    //
    //     foreach ($results as $result) {
    //         $carsList[] = [
    //             'make' => $result->getMake()->getId(),
    //             'makeName' => $result->getMake()->getName(),
    //             'model' => $result->getId(),
    //             'modelName' => $result->getName(),
    //
    //
    //         ];
    //     }
    //     return new JsonResponse($carsList);
    // // $response = new Response();
    // //
    // //     $response->headers->set('Content-Type', 'application/json');
    // //     $response->headers->set('Access-Control-Allow-Origin', '*');
    // //
    // //     $response->setContent(json_encode($carsList));
    // //
    // //     return $response;
    // }
    /**
     * @param Request $request
     * @param TransformedFinder $finderModel
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request, TransformedFinder $finderModel): JsonResponse
    {
        $query = $request->get('query');
        $carsList = [];
        $searchQuery = new Query\QueryString($query . '*');
        $searchQuery->setDefaultOperator('OR');
        $searchQuery->setFields(['name', 'make']);
        $searchQuery->setRewrite('constant_score');
        $results = $finderModel->find($searchQuery);

        foreach ($results as $result) {
            $carsList[] = [
                'make' => $result->getMake()->getId(),
                'makeName' => $result->getMake()->getName(),
                'model' => $result->getId(),
                'modelName' => $result->getName(),


            ];
        }
        return new JsonResponse($carsList);
    }


    /**
     * @Route("/search/form", name="search_by_form")
     */
    public function searchByForm(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('purpose', ChoiceType::class, [
                'label' => 'Prefer purpose',
                'required' => true,
                'placeholder' => 'Select value',
                'choices' => [
                    $this->translator->trans('For city driving') => 'City',
                    $this->translator->trans('For long distance driving') => 'LongDistance',
                    $this->translator->trans('For driving on the highway') => 'Highway',
                    $this->translator->trans('Car for every day') => 'Casual'
                ]
            ])
            ->add('country', ChoiceType::class, [
                'label' => 'Prefer manufacturer country',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    'Germany' => 'Germany',
                    'France' => 'France',
                    'China' => 'China',
                    'USA' => 'USA',
                    'Japan' => 'Japan',
                    'India' => 'India',
                    'South Korea' => 'South Korea',
                    'Spain' => 'Spain',
                    'England' => 'England',
                    'Italy' => 'Italy',
                    'Sweden' => 'Sweden'
                ]
            ])
//            ->add('transmission',ChoiceType::class, [
//                'label'=> 'Prefer transmission',
//                'required' => true,
//                'placeholder' => 'Select value',
//                'choices' => [
//                    'Does not matter' => 'Does not matter',
//                    'Manual'=> 'Manual',
//                    'Automatic'=>'Automatic',
//                    'Variator'=>'Variator'
//                ]
//            ])

            ->add('fuelConsumption', ChoiceType::class, [
                'label' => 'Prefer fuel consumption',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
//                    'Does not matter' => 'Does not matter',
                    $this->translator->trans('Low') => 'Low',
                    $this->translator->trans('Average') => 'Average',
                ]
            ])
            ->add('size', ChoiceType::class, [
                'label' => 'Prefer size of car',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    $this->translator->trans('Compact') => 'Compact',
                    $this->translator->trans('Standard') => 'Standard',
                    $this->translator->trans('Big') => 'Big',

                ]
            ])
            ->add('engineLife', ChoiceType::class, [
                'required' => false,
                'label' => 'Engine life',
                'placeholder' => 'Select value',
                'choices' => [
                    'Low' => 'Low',
                    'Average' => 'Average',
                    $this->translator->trans('High') => 'High',
                ]
            ])
            ->add('exclCountry', TextType::class, [
                'label' => $this->translator->trans('Country(ies)'),
                'required' => false,
            ])
            ->add('exclMake', TextType::class, [
                'required' => false,
                // 'allow_add'=>true,
                // 'allow_delete'=>true,
                'label' => $this->translator->trans('Brands(s)'),
                // 'class'=>Make::class,
                // 'multiple' => true,
                // 'expanded'=>true,

            ])
            ->add('save', SubmitType::class, [
                'label' => $this->translator->trans('Search')
            ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $boolQuery = new Query\BoolQuery();
            $exclCountry = $form['exclCountry']->getData();
            $exCountryList = explode(',', $exclCountry);

            $exclMake = $form['exclMake']->getData();
            // dd($exclMake);
            if ($exclMake != null) {
                foreach ($exclMake as $element) {
                    $exlcField = new Query\MatchQuery();
                    $exlcField->setFieldQuery('subModel.model.make.name', $element);
                    $boolQuery->addMustNot($exlcField);
                }

            }
            if ($exCountryList != null) {
                foreach ($exCountryList as $element) {
                    $exlcField = new Query\MatchQuery();
                    $exlcField->setFieldQuery('subModel.model.make.country', $element);
                    $boolQuery->addMustNot($exlcField);
                }

            } else {
                $country = $form['country']->getData();
                if ($country != null) {
                    $fieldQuery = new Query\MatchQuery();
                    $fieldQuery->setFieldQuery('subModel.model.make.country', $country);
                    $boolQuery->addMust($fieldQuery);
                }
            }
            $purpose = $form['purpose']->getData();
            if ($purpose) {
                $stringQuery = new Query\MatchQuery();
                $stringQuery->setFieldQuery('purpose', $purpose);
                $boolQuery->addMust($stringQuery);

            }

            $consumption = $form['fuelConsumption']->getData();
            if ($consumption != null) {
                $queryRange = new Query\Range();
                if ($consumption == 'Low') {
                    $queryRange
                        ->setParam(
                            'fuelConsumption', [
                            'lt' => 7
                        ]);
                } else {
                    $queryRange
                        ->setParam(
                            'fuelConsumption', [
                            'gte' => 7,
                            'lte' => 11,
                        ]);
                }
                $boolQuery->addMust($queryRange);
            }
            $size = $form['size']->getData();
            if ($size != null) {
                $fieldQuery4 = new Query\MatchQuery();
                $fieldQuery4->setFieldQuery('size', $size);
                $boolQuery->addMust($fieldQuery4);
            }
            $engineLife = $form['engineLife']->getData();
            if ($engineLife != null) {
                $fieldQuery5 = new Query\MatchQuery();
                $fieldQuery5->setFieldQuery('engineLife', $engineLife);
                $boolQuery->addMust($fieldQuery5);
            }

            $cars = $this->finderCars->find($boolQuery);
            if (!empty($cars)) {
                $text = count($cars) == 1 ? 'car' : 'cars';
                $request->getSession()
                    ->getFlashBag()
                    ->add('success', $this->translator->trans('Was found') . ' (' . count($cars) . ') ' . $this->translator->trans($text));
            } else {
                $request->getSession()
                    ->getFlashBag()
                    ->add('danger', $this->translator->trans('Any car was not found'));
            }
            return $this->render('search_filter/index.html.twig', [
                'cars' => $cars
            ]);

        }
        return $this->render('search_filter/search.html.twig', [
            'searchByForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/country-brands/list")
     */
    public function getCountriesOrBrands(Request $request, MakeRepository $brandRepo): JsonResponse
    {
        $brands = $brandRepo->findAll();
        $list = [];
        if ($request->get('country')) {
            foreach ($brands as $brand) {
                if (!in_array($brand->getCountry(), $list)) {
                    $list[] = $brand->getCountry();
                }
            }
        } else {
            foreach ($brands as $brand) {
                $list[] = $brand->getName();
            }
        }

        return $this->json($list);
    }

}
