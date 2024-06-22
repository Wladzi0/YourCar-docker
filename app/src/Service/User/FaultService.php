<?php

namespace App\Service\User;

use App\Entity\Fault;
use App\Entity\Image;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;

class FaultService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {
    }

    public function addImages(Fault $fault, Collection $images): void
    {
        foreach ($images as $image) {
            $file = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('fault_images_directory'),
                $file
            );
            $image = new Image();
            $image->setImage($file);
            $fault->addImage($image);
            $this->entityManager->persist($image);
        }
    }
}
