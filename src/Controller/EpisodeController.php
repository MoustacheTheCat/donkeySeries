<?php

namespace App\Controller;

use App\Entity\Episode;
use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/episode', name: 'app_episode')]
class EpisodeController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(EpisodeRepository $episodeRepository): Response
    {
        return $this->render('episode/index.html.twig', [
            'page_title' => 'Episodes',
            'episodes' => $episodeRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: '_show', methods: ["GET"],requirements: ['name' => '\d+'])]
    public function show(Episode $episode): Response
    {
        return $this->render('episode/show.html.twig', [
            'page_title' => 'Episode '.$episode->getTitle(),
            'program' => $episode->getSeason()->getProgram()->getTitle(),
            'season' => $episode->getSeason()->getNumber(),
            'episode' => $episode,
        ]);
    }
}
