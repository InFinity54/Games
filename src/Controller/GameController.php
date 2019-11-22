<?php
namespace App\Controller;

use App\Entity\Games;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game/{id}", name="game")
     */
    public function index(int $id)
    {
        try
        {
            $game = $this->getDoctrine()
                ->getRepository(Games::class)
                ->find($id);

            return $this->render('game/index.html.twig', [
                "game" => $game
            ]);
        }
        catch (Exception $ex)
        {
            return $this->render('game/error.html.twig', []);
        }
    }
}