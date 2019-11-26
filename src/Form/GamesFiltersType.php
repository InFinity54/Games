<?php

namespace App\Form;

use App\Entity\Games;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GamesFiltersType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("type", ChoiceType::class, ["required" => false, "label" => false, "placeholder" => "Type de jeu", "choices" => $this->getTypes()])
            ->add("company", ChoiceType::class, ["required" => false, "label" => false, "placeholder" => "Créateur", "choices" => $this->getCompanies()])
            ->add("platform", ChoiceType::class, ["required" => false, "label" => false, "placeholder" => "Plateforme", "choices" => $this->getPlatforms()])
            ->add('submit', SubmitType::class, ["label" => "GO !"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getTypes()
    {
        $qb = $this->em->createQueryBuilder()
            ->select("g.type")
            ->from(Games::class, "g")
            ->distinct(true);

        $query = $qb->getQuery();
        $result = $query->execute();
        $return = [];

        foreach ($result as $type)
        {
            $return += [$type["type"] => $type["type"]];
        }

        asort($return);
        return $return;
    }

    public function getCompanies()
    {
        $qb = $this->em->createQueryBuilder()
            ->select("g.company")
            ->from(Games::class, "g")
            ->distinct(true);

        $query = $qb->getQuery();
        $result = $query->execute();
        $return = [];

        foreach ($result as $company)
        {
            $return += [$company["company"] => $company["company"]];
        }

        asort($return);
        return $return;
    }

    public function getPlatforms()
    {
        $platforms = array(
            "Windows" => "Windows",
            "Mac" => "Mac",
            "Linux" => "Linux",
            "PlayStation 3" => "PlayStation 3",
            "PlayStation 4" => "PlayStation 4",
            "Xbox 360" => "Xbox 360",
            "Xbox One" => "Xbox One",
            "Nintendo Switch" => "Nintendo Switch",
            "Android" => "Android",
            "iOS" => "iOS"
        );

        return $platforms;
    }
}
