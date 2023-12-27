<?php

namespace App\Controller;

use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use App\Entity\Actor;
use App\Repository\ProgramRepository;
use App\Form\ProgramType;

use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Cocur\Slugify\Slugify; 
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
    

    #[Route('/new', name: '_new', methods: ["GET","POST"])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $program = new Program();
        $slugify = new Slugify();
        $program->setSlug($slugify->slugify($program->getTitle()));
        $form = $this->createForm(ProgramType::class,$program) ;
        $form->add('submit',SubmitType::class,[
            'label' => 'Add Program',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($program);
            $em->flush();
            $this->addFlash('success','Program created');
            return $this->redirectToRoute('app_program_shows');
        }
        return $this->render('program/new.html.twig', [
            'page_title' => 'New Program',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{program_slug}/edit', name: '_edit', methods: ["GET","POST"],requirements: ['program_slug' => '[a-z\-]+'])]
    public function edit(
        Request $request, 
        EntityManagerInterface $em,
        #[MapEntity(mapping: ['program_slug' => 'slug'])] Program $program
        ): Response
    {
        $slugify = new Slugify();
        $program->setSlug($slugify->slugify($program->getTitle()));
        $form = $this->createForm(ProgramType::class,$program) ;
        $form->add('submit',SubmitType::class,[
            'label' => 'Edit Program',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($program);
            $em->flush();
            $this->addFlash('success','Program edited');
            return $this->redirectToRoute('app_program_shows');
        }
        return $this->render('program/edit.html.twig', [
            'page_title' => 'Edit Program',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{program_slug}/delete', name: '_delete', methods: ["GET"],requirements: ['program_slug' => '[a-z\-]+'])]
    public function delete(
        EntityManagerInterface $em,
        #[MapEntity(mapping: ['program_slug' => 'slug'])] Program $program
        ): Response
    {
        $em->remove($program);
        $em->flush();
        $this->addFlash('success','Program deleted');
        return $this->redirectToRoute('app_program_shows');
    }

    #[Route('/{program_slug}', name: '_show', methods: ["GET"],requirements: ['program_slug' => '[a-z\-]+'])]
    public function show(
        #[MapEntity(mapping: ['program_slug' => 'slug'])]Program $program
        ): Response
    {
        
        return $this->render('program/show.html.twig', [
            'page_title' => 'Program '.$program->getTitle(),
            'program' => $program,
            'seasons' => $program->getSeasons()->ToArray(),
        ]);
    }




    #[Route('/{program_slug}/{season_slug}', name: '_show_season', methods: ["GET"],requirements: ['program_slug' => '[a-z\-]+', 'season_slug' => '[a-z1\d\-]+'])]
    public function showProgramSeason(
        #[MapEntity(mapping: ['program_slug' => 'slug'])] Program $program,
        #[MapEntity(mapping: ['season_slug' => 'slug'])] Season $season
    ): Response
    {
        return $this->render('program/season_show.html.twig', [
            'page_title' => $program->getTitle(). ' Season '.$season->getNumber(),
            'program' => $program,
            'season' => $season,
            'episodes' => $season->getEpisodes()->toArray(),
        ]);
    }  

    #[Route('/{program_slug}/{season_slug}/{episode_slug}', name: '_show_season_episode', methods: ["GET"],requirements: ['program_slug' => '[a-z\-]+', 'season_slug' => '[a-z\d\-]+', 'episode_slug' => '[a-z\-]+'])]
    public function showProgramSeasonEpisode(
        #[MapEntity(mapping: ['program_slug' => 'slug'])] Program $program,
        #[MapEntity(mapping: ['season_slug' => 'slug'])] Season $season,
        #[MapEntity(mapping: ['episode_slug' => 'slug'])] Episode $episode
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
