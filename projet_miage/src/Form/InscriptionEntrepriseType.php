<?php

namespace App\Form;

use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;

class InscriptionEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre_poste', TextType::class, ['required' => false])
            ->add('localisation', TextType::class, ['required' => false])
            ->add('technologie', EnumType::class, ['class' => LangagesEnum::class ])
            ->add('experience', EnumType::class, ['class' => ExperienceEnum::class])
            ->add('salaire', MoneyType::class, ['required' =>false])
            ->add('description', TextType::class, ['required' =>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
