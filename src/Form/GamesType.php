<?php

namespace App\Form;

use App\Entity\Games;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class GamesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ["required" => true, "label" => "Nom du jeu"])
            ->add('description', TextType::class, ["required" => true, "label" => "Description du jeu"])
            ->add('type', TextType::class, ["required" => true, "label" => "Type de jeu"])
            ->add('releaseDate', DateType::class, ["required" => true, "label" => "Date de sortie", "widget" => "single_text", "html5" => false, "attr" => ["class" => "js-datepicker"]])
            ->add('company', TextType::class, ["required" => false, "label" => "Créateur"])
            ->add('onWin', CheckboxType::class, ["required" => false, "label" => "Windows"])
            ->add('onMac', CheckboxType::class, ["required" => false, "label" => "Mac"])
            ->add('onLinux', CheckboxType::class, ["required" => false, "label" => "Linux"])
            ->add('onPs3', CheckboxType::class, ["required" => false, "label" => "PlayStation 3"])
            ->add('onPs4', CheckboxType::class, ["required" => false, "label" => "PlayStation 4"])
            ->add('onXbox360', CheckboxType::class, ["required" => false, "label" => "Xbox 360"])
            ->add('onXboxOne', CheckboxType::class, ["required" => false, "label" => "Xbox One"])
            ->add('onSwitch', CheckboxType::class, ["required" => false, "label" => "Nintendo Switch"])
            ->add('onAndroid', CheckboxType::class, ["required" => false, "label" => "Android"])
            ->add('onIos', CheckboxType::class, ["required" => false, "label" => "iOS"])
            ->add('gameicon', FileType::class, [
                'required' => true,
                'label' => 'Icône du jeu',
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png'
                        ],
                        'mimeTypesMessage' => 'Veuillez choisir un fichier PNG de maximum de 1 Mo',
                    ])
                ],
            ])
            ->add('submit', SubmitType::class, ["label" => "Ajouter le jeu à la base de données"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Games::class,
            'releaseDate' => new DateTime("now")
        ]);
    }
}
