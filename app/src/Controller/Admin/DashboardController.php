<?php

namespace App\Controller\Admin;

use App\Entity\Car\CarDetails;
use App\Entity\Car\Engine;
use App\Entity\Car\Make;
use App\Entity\Car\Model;
use App\Entity\Car\Rim;
use App\Entity\Car\SubModel;
use App\Entity\Car\Tire;
use App\Entity\Car\Transmission;
use App\Entity\Comment;
use App\Entity\Fault;
use App\Entity\Part;
use App\Entity\User;
use App\Repository\FaultRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private readonly FaultRepository $faultRepository
    ) {
    }

    #[Route(path: '/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/welcome.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('YourCar');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('User settings');
        yield MenuItem::linktoCrud('Users', 'fa fa-user', User::class);
        yield MenuItem::linktoCrud('Comments', 'fa fa-comment', Comment::class);
        yield MenuItem::section('Car');
        yield MenuItem::linktoCrud('Makes', 'fas fa-list-ul', Make::class);
        yield MenuItem::linktoCrud('Models', 'fas fa-list-ol', Model::class);
        yield MenuItem::linktoCrud('Engines', 'fa fa-cog', Engine::class);
        yield MenuItem::linktoCrud('SubModels', 'fa fa-car', SubModel::class);
        yield MenuItem::linktoCrud('Car Details', 'fas fa-puzzle-piece', CarDetails::class);
        yield MenuItem::linktoCrud('Parts', 'fas fa-dolly-flatbed', Part::class);
        yield MenuItem::linktoCrud('Rims', 'fab fa-empire', Rim::class);
        yield MenuItem::linktoCrud('Tires', 'fa fa-life-ring', Tire::class);
        yield MenuItem::linktoCrud($this->newFaultCount(), 'fas fa-exclamation', Fault::class);
        yield MenuItem::linktoCrud('Transmissions', 'fa fa-cogs', Transmission::class);
        yield MenuItem::section();
    }

    public function newFaultCount(): string
    {
        $faultCount = count($this->faultRepository->findBy(['published' => false]));

        return sprintf('Faults (<span id="counter" style="color: red;">%d NEW</span>)', $faultCount);
    }
}
