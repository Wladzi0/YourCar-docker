<?php

namespace App\Form;

use App\DTO\UserSettingDTO;
use App\Enum\CarBodyTypeEnum;
use App\Enum\DetailedFuelConsumptionEnum;
use App\Enum\TuningEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('preferLanguage', LanguageType::class, [
                'label' => 'form.preferred-language',
                'placeholder' => false,
                'required' => false,
            ])
            ->add('carType', EnumType::class, [
                'class' => CarBodyTypeEnum::class,
                'label' => 'form.prefer-car-type',
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('tuning', EnumType::class, [
                'class' => TuningEnum::class,
                'label' => 'Suitability for tuning',
                'required' => false,
                'placeholder' => 'form.select',
            ])
            ->add('fuelConsumption', ChoiceType::class, [
                'class' => DetailedFuelConsumptionEnum::class,
                'required' => false,
                'placeholder' => 'form.select',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', UserSettingDTO::class);
    }
}
