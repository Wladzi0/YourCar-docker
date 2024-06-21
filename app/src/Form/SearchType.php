<?php

namespace App\Form;

use App\DTO\SearchDTO;
use App\Enum\CarSizeEnum;
use App\Enum\DrivingPurposeEnum;
use App\Enum\EngineLifeEnum;
use App\Enum\FuelConsumptionEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('country', CountryType::class, [
                'label' => 'Prefer manufacturer country',
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('purpose', EnumType::class, [
                'label' => 'Prefer purpose',
                'class' => DrivingPurposeEnum::class,
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('fuelConsumption', EnumType::class, [
                'class' => FuelConsumptionEnum::class,
                'label' => 'Prefer fuel consumption',
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('size', ChoiceType::class, [
                'class' => CarSizeEnum::class,
                'label' => 'Prefer size of car',
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('engineLife', ChoiceType::class, [
                'class' => EngineLifeEnum::class,
                'required' => false,
                'label' => 'Engine life',
                'placeholder' => 'form.select',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', SearchDTO::class);
    }
}
