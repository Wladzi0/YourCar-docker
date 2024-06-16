<?php

namespace App\Controller\Admin;

use App\Entity\Part;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PartCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Part::class;
    }


    public function configureFields(string $pageName): iterable
    {

        return [
            IdField::new('id')->onlyOnIndex(),
            ImageField::new('image')
                ->setBasePath('/images/parts')
                ->setUploadDir('public/images/parts')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('name'),
            TextField::new('catalogNumber')->setLabel('Catalog number'),
            AssociationField::new('car'),
            AssociationField::new('engine')
        ];

    }

}
