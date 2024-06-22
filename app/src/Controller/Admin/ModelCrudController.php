<?php

namespace App\Controller\Admin;

use App\Entity\Car\Model;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Contracts\Translation\TranslatorInterface;

class ModelCrudController extends AbstractCrudController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {
    }

    public static function getEntityFqcn(): string
    {
        return Model::class;
    }

    public function configureFields(string $pageName): iterable
    {

        return [
            IdField::new('id')
                ->onlyOnDetail(),
            ImageField::new('icon')
                ->setLabel('Image')
                ->setBasePath('/images/models')
                ->setUploadDir('public/images/models')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('make')
                ->setRequired(true)
                ->autocomplete(),
            TextField::new('name'),
            ChoiceField::new('yearStart')
                ->setLabel($this->translator->trans('Production start'))
                ->setChoices($this->getYears(1900)),
            ChoiceField::new('yearFinish')
                ->setLabel($this->translator->trans('Production finish'))
                ->setChoices($this->getYears(1900)),
            AssociationField::new('engines')
                ->hideOnDetail()
                ->setFormType(EntityType::class)
                ->setFormTypeOptions([
                    'multiple' => true,
                    'by_reference' => false,
                ]),
            ArrayField::new('engines')
                ->onlyOnDetail(),
            ArrayField::new('bodyType')
                ->hideOnForm(),
            ChoiceField::new('bodyType')
                ->onlyOnForms()
                ->setChoices([
                    'Hatchback' => 'Hatchback',
                    'Sedan' => 'Sedan',
                    'MUV/SUV' => 'MUV/SUV',
                    'Coupe' => 'Coupe',
                    'Convertible' => 'Convertible',
                    'Wagon' => 'Wagon',
                    'Van' => 'Van',
                    'Jeep' => 'Jeep',
                ])
                ->allowMultipleChoices(true),
            AssociationField::new('transmissions')
                ->hideOnDetail()
                ->setFormType(EntityType::class)
                ->setFormTypeOptions([
                    'multiple' => true,
                    'by_reference' => false,
                ]),
            ArrayField::new('transmissions')
                ->onlyOnDetail(),

        ];

    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    private function getYears(int $min, $max = 'current'): array
    {
        $years = range($min, ($max === 'current' ? date('Y') : $max));

        return array_combine($years, $years);
    }
}
