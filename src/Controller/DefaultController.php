<?php
namespace App\Controller;

use App\Entity\Games;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $games = $this->getDoctrine()
            ->getRepository(Games::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            "games" => $games
        ]);
    }

    /**
     * @Route("/new")
     */
    public function new()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $game = new Games();

        $game->setName("Half-Life 2")
            ->setDescription("Vous incarnez le professeur Gordon Freeman, fraîchement arrivé dans une ville aux mains d'une mystérieuse organisation appelée Le Cartel.")
            ->setType("FPS")
            ->setCompany("Valve")
            ->setReleaseDate(new DateTime("2004-11-16"))
            ->setonWin(true)
            ->setOnMac(true)
            ->setOnLinux(true)
            ->setOnPs3(true)
            ->setOnPs4(false)
            ->setOnXbox360(true)
            ->setOnXboxOne(false)
            ->setOnSwitch(false)
            ->setOnAndroid(false)
            ->setOnIos(false);

        $entityManager->persist($game);
        $entityManager->flush();

        return new Response('Saved new product with id '.$game->getId());
    }
}