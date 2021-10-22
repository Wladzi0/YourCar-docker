<?php

namespace App\Controller;

use App\Entity\User;
use Elastica\Query\Term;
use FOS\ElasticaBundle\Finder\PaginatedFinderInterface;
use FOS\ElasticaBundle\Manager\RepositoryManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SubModelController
{
//    private $finder;
//    private $paginator;
//
//    public function __construct(PaginatedFinderInterface $finder, PaginatorInterface $paginator)
//    {
//        $this->finder = $finder;
//        $this->paginator = $paginator;
//    }
//asdf
//    public function userAction()
//    {
//        // Option 1. Returns all users who have example.net in any of their mapped fields
//        $results = $this->finder->find('example.net');
//
//        // Option 2. Returns a set of hybrid results that contain all Elasticsearch results
//        // and their transformed counterparts. Each result is an instance of a HybridResult
//        $results = $this->finder->findHybrid('example.net');
//
//        // Option 3a. Pagerfanta'd resultset
//        /** var Pagerfanta\Pagerfanta */
//        $userPaginator = $this->finder->findPaginated('bob');
//        $countOfResults = $userPaginator->getNbResults();
//
//        // Option 3b. KnpPaginator resultset
//
//        $results = $this->finder->createPaginatorAdapter('bob');
//        $pagination = $this->paginator->paginate($results, $page, 10);
//
//        // You can specify additional options as the fourth parameter of Knp Paginator
//        // paginate method to nested_filter and nested_sort
//
//        $options = [
//            'sortNestedPath' => 'owner',
//            'sortNestedFilter' => new Term(['enabled' => ['value' => true]]),
//        ];
//
//        // sortNestedPath and sortNestedFilter also accepts a callable
//        // which takes the current sort field to get the correct sort path/filter
//
//        $pagination = $this->paginator->paginate($results, $page, 10, $options);
//    }


    /**
     * @Route("/search")
     */
    public function searchElastic(RepositoryManagerInterface $finder) {

        $someResult = $finder->getRepository(User::class)->find('fos_elastica.finder.app.user');
        return new response('N/A');
    }
}
