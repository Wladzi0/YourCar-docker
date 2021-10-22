<?php

namespace App\Controller;


use Elastica\Query;
use Symfony\Component\BrowserKit\Response;
use FOS\ElasticaBundle\Finder\TransformedFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

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
//    /**
//     * @param Request $request
//     * @Route("/filter", name="filter")
//     */
//    public function filterAction(Request $request, TransformedFinder $finderCarDetails): \Symfony\Component\HttpFoundation\Response
//    {
//        $request = $this->get('request_stack')->getCurrentRequest();
//        $filterForm = $request->request->all();
//
//        if ($filterForm) {
//            $boolQuery = new Query\BoolQuery();
//
//            $fieldQuery = new Query\MatchQuery();
//            $fieldQuery->setField('fuelConsumption', '9');
//            $boolQuery->addMust($fieldQuery);
////            $categoryQuery = new Query\Terms('fuelConsumption', ['9']);
////            $boolQuery->addMust($categoryQuery);
//            $idQuery = new Query\Terms('_id', ['21','22','23']);
//            $boolQuery->addFilter($idQuery);
////            $fieldQuery->setField('_id', ['21','22']);
////            $boolQuery->addFilter($idQuery);
////            $data = new Query\BoolQuery();
////            $data->addFilter($boolQuery);
////            $boolQuery = new Query\BoolQuery();
////            $fieldQuery = new Query\MatchQuery();
////            $fieldQuery->setField('fuelConsumption', '9');
////            $boolQuery->addShould($fieldQuery);
////            $q = new Query($boolQuery);
////            $filter= ['_id'=>['21','22']];
////            $q->setPostFilter($filter)->setMinScore(1);
//            $data = $finderCarDetails->find($boolQuery);
//
//
//            return $this->render('search_filter/paginator.html.twig',[
//            'data'=>$data ]);
//
//
////        foreach ($filterForm as $options) {
////            $andOuter = new Query\BoolQuery();
////
////            foreach ($options as $optionKey=>$value) {
////
////                $orOuter = new Query\BoolQuery();
////                $optionKeyTerm = new Query\Term();
////                $andInner = new Query\BoolQuery();
////                $optionKeyTerm = new Query\Term();
////                $optionKeyTerm->setTerm('filterOptions', $optionKey);
////
////                $valueTerm = new Query\Term();
////                $valueTerm->setTerm('productOptionValues.value', $value);
////                $andInner->addMust($optionKeyTerm);
////                $andInner->addMust($valueTerm);
////            }
////        }
////
////                    $andInner = new Query\BoolQuery();
////                    $optionKeyTerm = new Query\Term();
////                    $optionKeyTerm->setTerm('filter.filterOption', $optionKey);
////
////                    $valueTerm = new Query\Term();
////                    $valueTerm->setTerm('filter.filterOption', $value);
////                    $andInner->addMust($optionKeyTerm);
////                    $andInner->addMust($valueTerm);
////
////                    $orOuter->addShould($andInner);
////                }
////                $andOuter->addMust($orOuter);
////            }
////            $filtered = new Filtered();
////            $filtered->setFilter($andOuter);
////            $cars = $subModelFinder->find($filtered);
////        }
//
//        }
//
//    }


}