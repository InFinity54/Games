<?php
namespace App\Controller;

use App\Entity\Games;
use App\Form\GamesType;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/new", name="new_game")
     */
    public function add(Request $request)
    {
        try
        {
            $form = $this->createForm(GamesType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $game = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($game);
                $entityManager->flush();

                /** @var UploadedFile $file */
                $file = $form["gameicon"]->getData();
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
                $file->move($_SERVER['DOCUMENT_ROOT']."\\img\\games\\icons", $game->getName().'.'.$file->guessExtension());

                return $this->redirectToRoute('home');
            }

            return $this->render('game/add.html.twig', [
                "form" => $form->createView()
            ]);
        }
        catch (Exception $ex)
        {
            var_dump($ex->getMessage());

            return $this->render('game/add.html.twig', [
                "form" => $form->createView()
            ]);
        }
    }
}