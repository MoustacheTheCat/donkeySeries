<?php

namespace App\Controller;
use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;
use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/program', name: 'app_program')]
class ProgramController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(ProgramRepository $programRepository): Response
    {
        return $this->render('program/index.html.twig', [
            'page_title' => 'Program',
            'programs' => $programRepository->findAll(),
        ]);
    }
    #[Route('/{id}', name: '_show', methods: ["GET"],requirements: ['name' => '\d+'])]
    public function show(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'page_title' => 'Program '.$program->getTitle(),
            'program' => $program,
            'seasons' => $program->getSeasons()->ToArray(),
        ]);
    }
    #[Route('/{id}/season/{seasonId}', name: '_show_season', methods: ["GET"],requirements: ['id' => '\d+', 'seasonId' => '\d+'])]
    public function showSeason(int $id ,ProgramRepository $programRepository, int $seasonId , SeasonRepository $seasonRepository): Response
    {
        return $this->render('program/season_show.html.twig', [
            'page_title' => 'Program '.$programRepository->findOneBy(['id' => $id])->getTitle(),
            'program' => $programRepository->findOneBy(['id' => $id]),
            'season' => $seasonRepository->findOneBy(['id' => $seasonId]),
            'episodes' => $seasonRepository->findOneBy(['id' => $seasonId])->getEpisodes()->toArray(),
        ]);
    }  
    #[Route('/{id}/season/{seasonId}/episode/{episodeId}', name: '_show_season_episode', methods: ["GET"],requirements: ['id' => '\d+', 'seasonId' => '\d+', 'episodeId' => '\d+'])]
    public function showEpisode(int $id ,ProgramRepository $programRepository, int $seasonId , SeasonRepository $seasonRepository, int $episodeId, EpisodeRepository $episodeRepository): Response
    {
        return $this->render('program/season_episode_show.html.twig', [
            'page_title' => 'Program '.$programRepository->findOneBy(['id' => $id])->getTitle(),
            'program' => $programRepository->findOneBy(['id' => $id]),
            'season' => $seasonRepository->findOneBy(['id' => $seasonId]),
            'episode' => $episodeRepository->findOneBy(['id' => $episodeId]),
        ]);
    }    
}
