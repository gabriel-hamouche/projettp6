<?php
namespace App\Form;

use App\Entity\Langage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CodeurFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('langages', EntityType::class, [
                'class' => Langage::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true, // Pour afficher sous forme de cases à cocher
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Developpeur::class,
        ]);
    }
}
