<?php

namespace App\Controller;

use App\Entity\Episode;
use App\Form\EpisodeType;
use App\Repository\EpisodeRepository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Brepisode_slugge\Doctrine\Attribute\MapEntity;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Cocur\Slugify\Slugify; 

#[Route('/episode')]
class EpisodeController extends AbstractController
{
    #[Route('/', name: 'app_episode_index', methods: ['GET'])]
    public function index(EpisodeRepository $episodeRepository): Response
    {
        return $this->render('episode/index.html.twig', [
            'episodes' => $episodeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_episode_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $episode = new Episode();
        $slugify = new Slugify();
        $episode->setSlug($slugify->slugify($episode->getTitle()));
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->add('submit',SubmitType::class,[
            'label' => 'Add Episode',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValepisode_slug()) {
            $entityManager->persist($episode);
            $entityManager->flush();

            return $this->redirectToRoute('app_episode_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('episode/new.html.twig', [
            'episode' => $episode,
            'form' => $form,
        ]);
    }

    #[Route('/{episode_slug}', name: 'app_episode_show', methods: ['GET'],requirements: ['episode_slug' => '[a-z\-]+'])]
    public function show(#[MapEntity(mapping: ['episode_slug' => 'slug'])] Episode $episode): Response
    {
        return $this->render('episode/show.html.twig', [
            'episode' => $episode,
        ]);
    }

    #[Route('/{episode_slug}/edit', name: 'app_episode_edit', methods: ['GET', 'POST'],requirements: ['episode_slug' => '[a-z\-]+'])]
    public function edit(
        Request $request, 
        #[MapEntity(mapping: ['episode_slug' => 'slug'])] Episode $episode, 
        EntityManagerInterface $entityManager
        ): Response
    {
        $slugify = new Slugify();
        $episode->setSlug($slugify->slugify($episode->getTitle()));
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->add('submit',SubmitType::class,[
            'label' => 'Add Episode',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValepisode_slug()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_episode_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('episode/edit.html.twig', [
            'episode' => $episode,
            'form' => $form,
        ]);
    }

    #[Route('/{episode_slug}/delete', name: 'app_episode_delete', methods: ['POST'],requirements: ['episode_slug' => '[a-z\-]+'])]
    public function delete(
        Request $request, 
        #[MapEntity(mapping: ['episode_slug' => 'slug'])] Episode $episode, 
        EntityManagerInterface $entityManager
        ): Response
    {
        if ($this->isCsrfTokenValepisode_slug('delete'.$episode->getepisode_slug(), $request->request->get('_token'))) {
            $entityManager->remove($episode);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_episode_index', [], Response::HTTP_SEE_OTHER);
    }
}
