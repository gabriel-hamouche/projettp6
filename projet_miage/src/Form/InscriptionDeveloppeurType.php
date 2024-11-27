<?php

namespace App\Form;


use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;

use App\Entity\Developpeur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class InscriptionDeveloppeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('localisation',TextType::class)
            ->add('langage',EnumType::class, ['class' => LangagesEnum::class ])
            ->add('experience',EnumType::class, ['class' => ExperienceEnum::class ])
            ->add('salaire', MoneyType::class)
            ->add('biographie', TextType::class)
            ->add('avatar',TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Developpeur::class,
        ]);
    }
}
