<?php
namespace App\Controller;

use App\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $games = $this->getDoctrine()
            ->getRepository(Games::class)
            ->findBy(array(), array("releaseDate" => "DESC"));

        return $this->render('home/index.html.twig', [
            "games" => $games
        ]);
    }
}