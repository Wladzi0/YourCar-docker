<?php

namespace App\Form;

use App\DTO\FilterDTO;
use App\Entity\Car\Transmission;
use App\Enum\AgeEnum;
use App\Enum\DetailedFuelConsumptionEnum;
use App\Enum\PowerEnum;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('consumption', EnumType::class, [
                'class' => DetailedFuelConsumptionEnum::class,
                'placeholder' => 'form.select',
                'label' => 'Fuel consumption (l/km)',
            ])
            ->add('transmission', EntityType::class, [
                'label' => Transmission::class,
                'placeholder' => 'form.select',
            ])
            ->add('power', ChoiceType::class, [
                'class' => PowerEnum::class,
                'placeholder' => 'form.select',
                'label' => 'Power (HP)',
            ])
            ->add('age', EnumType::class, [
                'placeholder' => 'form.select',
                'class' => AgeEnum::class,
            ])
            ->add('tuning', CheckboxType::class, [
                'label' => 'Tuning possibility',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', FilterDTO::class);
    }
}
