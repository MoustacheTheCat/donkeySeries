<?php

namespace App\Controller;


use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use App\Repository\ProgramRepository;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;

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

    #[Route('/{program_id}/season/{season_id}', name: '_show_season', methods: ["GET"],requirements: ['program_id' => '\d+', 'season_id' => '\d+'])]
    public function showProgramSeason(
        #[MapEntity(id: 'program_id')] Program $program,
        #[MapEntity(id: 'season_id')] Season $season
    ): Response
    {
        return $this->render('program/season_show.html.twig', [
            'page_title' => $program->getTitle(). ' Season '.$season->getNumber(),
            'program' => $program,
            'season' => $season,
            'episodes' => $season->getEpisodes()->toArray(),
        ]);
    }  

    #[Route('/{program_id}/season/{season_id}/episode/{episode_id}', name: '_show_season_episode', methods: ["GET"],requirements: ['program_id' => '\d+', 'season_id' => '\d+', 'episode_id' => '\d+'])]
    public function showProgramSeasonEpisode(
        #[MapEntity(id: 'program_id')] Program $program,
        #[MapEntity(id: 'season_id')] Season $season,
        #[MapEntity(id :'episode_id')] Episode $episode
        ): Response
    {
        return $this->render('program/season_episode_show.html.twig', [
            'page_title' => $program->getTitle(). ' Season '.$season->getNumber(). 'Episode '.$episode->getNumber(),
            'program' => $program,
            'season' => $season,
            'episode' => $episode,
        ]);
    }    
}
