<?php

namespace App\Form;

use App\Entity\Developpeur;
use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;






class InscriptionDeveloppeurType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class,['required' => false])
            ->add('password', PasswordType::class,['required' => false])
            ->add('nom', TextType::class,['required' => false])
            ->add('prenom',TextType::class,['required' => false])
            ->add('localisation',TextType::class,['required' => false])
            ->add('langage', EnumType::class, ['class' => LangagesEnum::class, 'mapped' =>false ])
            ->add('experience', EnumType::class, ['class' => ExperienceEnum::class, 'mapped' =>false ])
            ->add('salaire',MoneyType::class,['required' => false])
            ->add('biographie',TextType::class,['required' => false])
            ->add('avatar', FileType::class, ['required' => false]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Developpeur::class,
        ]);
    }
}
