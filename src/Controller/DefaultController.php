<?php
namespace App\Controller;

use App\Form\GamesFiltersType;
use App\Entity\Games;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $filters = [];

        if (isset($_GET["games_filters"]))
        {
            if ($_GET["games_filters"]["type"] !== "")
            {
                $filters += ["type" => $_GET["games_filters"]["type"]];
            }

            if ($_GET["games_filters"]["company"] !== "")
            {
                $filters += ["company" => $_GET["games_filters"]["company"]];
            }

            if ($_GET["games_filters"]["platform"] !== "")
            {
                switch ($_GET["games_filters"]["platform"])
                {
                    case "Windows":
                        $filters += ["onWin" => "true"];
                        break;
                    case "Mac":
                        $filters += ["onMac" => "true"];
                        break;
                    case "Linux":
                        $filters += ["onLinux" => "true"];
                        break;
                    case "PlayStation 3":
                        $filters += ["onPs3" => "true"];
                        break;
                    case "PlayStation 4":
                        $filters += ["onPs4" => "true"];
                        break;
                    case "Xbox 360":
                        $filters += ["onXbox360" => "true"];
                        break;
                    case "Xbox One":
                        $filters += ["onXboxOne" => "true"];
                        break;
                    case "Nintendo Switch":
                        $filters += ["onSwitch" => "true"];
                        break;
                    case "Android":
                        $filters += ["onAndroid" => "true"];
                        break;
                    case "iOS":
                        $filters += ["onIos" => "true"];
                        break;
                }
            }
        }

        $games = $this->getDoctrine()
            ->getRepository(Games::class)
            ->findBy($filters, array("releaseDate" => "DESC"));

        $form = $this->createForm(GamesFiltersType::class);

        return $this->render('home/index.html.twig', [
            "games" => $games,
            "form" => $form->createView()
        ]);
    }
}