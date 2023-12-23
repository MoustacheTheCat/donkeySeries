<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/program', name: 'app_program')]
class ProgramController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'page_title' => 'Program',
        ]);
    }
    #[Route('/{id<^\d+$>}', name: '_show', methods: ["GET"],requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        return $this->render('program/show.html.twig', [
            'page_title' => 'Program '.$id,
            'id' => $id,
        ]);
    }
}
