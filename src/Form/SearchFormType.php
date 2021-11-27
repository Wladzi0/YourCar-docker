<?php

namespace App\Form;

use App\Entity\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('country', ChoiceType::class, [
                'label' => 'Prefer manufacturer country',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    'Does not matter' => 'does not matter',
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
            ->add('purpose', ChoiceType::class, [
                'label' => 'Prefer purpose',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    'For city driving ' => 'For city driving',
                    'For long distance driving' => 'For long distance driving',
                    'For driving on the highway' => 'For driving on the highway',
                    'Car for every day' => 'Car for every day'
                ]
            ])
            ->add('fuelConsumption', ChoiceType::class, [
                'label' => 'Prefer fuel consumption',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    'Does not matter' => 'Does not matter',
                    'Low' => 'Low',
                    'Average' => 'Average',
                ]
            ])
            ->add('size', ChoiceType::class, [
                'label' => 'Prefer size of car',
                'required' => false,
                'placeholder' => 'Select value',
                'choices' => [
                    'Does not matter' => 'Does not matter',
                    'Compact' => 'Compact',
                    'Standard' => 'Standard',
                    'Big' => 'Big',

                ]
            ])
            ->add('engineLife', ChoiceType::class, [
                'required' => false,
                'label' => 'Engine life',
                'placeholder' => 'Select value',
                'choices' => [
                    'Does not matter' => 'Does not matter',
                    'Low' => 'Low',
                    'Average' => 'Average',
                    'High' => 'High',
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Search'
            ])
//            ->add('roominess')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
        ]);
    }
}
