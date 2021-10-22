<?php

namespace App\Form;

use App\Entity\Filter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('consumption',ChoiceType::class,[
                'choices' => [
                    '6<'=>'6<',
                    '6-8'=>'6-8',
                    '8-10'=>'6-10',
                    '10-12'=>'10-12',
                    '>12'=>'>12',

                ],
                'multiple'=>true,
                'expanded' => true,
            ])
            ->add('power',ChoiceType::class,[
                'choices' => [
                    '100<'=>'100<',
                    '1000-150'=>'100-150',
                    '150-200'=>'150-200',
                    '200-300'=>'200-300',
                    '>300'=>'>300',

                ],
                'multiple'=>true,
                'expanded' => true,
            ])
            ->add('age',ChoiceType::class,[
                'choices' => [
                    '2<'=>'2<',
                    '2-5'=>'2-5',
                    '5-10'=>'5-10',
                    '10-20'=>'10-20',
                    '>20'=>'>20',

                ],
                'multiple'=>true,
                'expanded' => true,
            ])
            ->add('tuning',ChoiceType::class,[
                'choices' => [
                    'Yes'=>true,
                    'No'=> false,
                    'Maybe'=> null,

                ],
                'multiple'=>true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Filter::class,

        ]);
    }
}
