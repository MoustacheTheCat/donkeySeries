<?php

namespace App\Controller;

use App\Entity\Season;
use App\Repository\SeasonRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/season', name: 'app_season')]
class SeasonController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(SeasonRepository $easonRepository): Response
    {
        return $this->render('season/index.html.twig', [
            'page_title' =>  "Seasons",
            'seasons' => $easonRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: '_show', methods: ["GET"],requirements: ['name' => '\d+'])]
    public function show(Season $season): Response
    {
        return $this->render('season/show.html.twig', [
            'page_title' => 'Season '.$season->getNumber(),
            'season' => $season,
            'episodes' => $season->getEpisodes()->ToArray(),
        ]);
    }
}
