<?php

namespace App\Form;

use App\Entity\Filter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class FilterFormType extends AbstractType
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator=$translator;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('consumption',ChoiceType::class,[
                'placeholder' => 'Select value',
                'label' => $this->translator->trans( 'Fuel consumption (l/km)'),
                'label_attr' => ['id' => 'l_fuelConsumption'],
                'choices' => [
                    '6<'=>'6-<',
                    '6-8'=>'6-8',
                    '8-10'=>'8-10',
                    '10-12'=>'10-12',
                    '>12'=>'12->',
                ]

            ])
            ->add('transmission',ChoiceType::class, [
                'label'=> $this->translator->trans( 'Transmission'),
                'label_attr' => ['id' => 'l_transmission'],
                'placeholder' => $this->translator->trans( 'Select value'),
                'required' => true,
                'choices'=>[

                    'Manual'=> 'Manual',
                    'Automatic'=>'Automatic',
                    'Variator'=>'Variator'
                ]
            ])
            ->add('power',ChoiceType::class,[
                'placeholder' =>  'Select value',
                'label'=> $this->translator->trans( 'Power (HP)'),
                'label_attr' => ['id' => 'l_power'],
                'choices' => [
                    '100<'=>'100-<',
                    '100-150'=>'100-150',
                    '150-200'=>'150-200',
                    '200-300'=>'200-300',
                    '>300'=>'300->',
                ]
            ])
            ->add('age',ChoiceType::class,[
                'label_attr' => ['id' => 'l_age'],
                'placeholder' => 'Select value',
                'choices' => [
                    '2<'=>'2-<',
                    '2-5'=>'2-5',
                    '5-10'=>'5-10',
                    '10-20'=>'10-20',
                    '>20'=>'20->',
                ]
            ])
            ->add('tuning',ChoiceType::class,[
                'label'=> $this->translator->trans( 'Tuning possibility'),
                'label_attr' => ['id' => 'l_tuning'],
                'placeholder' => 'Select value',
                'choices' => [
                    'Yes'=>'true',
                    'No'=> 'false',
                    'Maybe'=> 'null',
                ]
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
