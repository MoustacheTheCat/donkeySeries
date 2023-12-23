<?php

namespace App\Controller;
use App\Entity\Program;
use App\Repository\ProgramRepository;
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
        ]);
    }
}
