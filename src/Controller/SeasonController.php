<?php

namespace App\Controller;

use App\Entity\Season;
use App\Form\SeasonType;
use App\Repository\SeasonRepository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Brseason_slugge\Doctrine\Attribute\MapEntity;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Cocur\Slugify\Slugify; 

#[Route('/season')]
class SeasonController extends AbstractController
{
    #[Route('/', name: 'app_season_index', methods: ['GET'])]
    public function index(SeasonRepository $seasonRepository): Response
    {
        return $this->render('season/index.html.twig', [
            'seasons' => $seasonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_season_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $season = new Season();
        $slugify = new Slugify();
        $season->setSlug($slugify->slugify($season->getName()));
        $form = $this->createForm(SeasonType::class, $season);
        $form->add('submit',SubmitType::class,[
            'label' => 'Add Season',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValseason_slug()) {
            $entityManager->persist($season);
            $entityManager->flush();

            return $this->redirectToRoute('app_season_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('season/new.html.twig', [
            'season' => $season,
            'form' => $form,
        ]);
    }

    #[Route('/{season_slug}', name: 'app_season_show', methods: ['GET'],requirements: ['season_slug' => '[a-z1\d\-]+'])]
    public function show( #[MapEntity(mapping: ['season_slug' => 'slug'])] Season $season): Response
    {
        return $this->render('season/show.html.twig', [
            'season' => $season,
        ]);
    }

    #[Route('/{season_slug}/edit', name: 'app_season_edit', methods: ['GET', 'POST'],requirements: ['season_slug' => '[a-z1\d\-]+'])]
    public function edit(
        Request $request, 
        #[MapEntity(mapping: ['season_slug' => 'slug'])] Season $season, 
        EntityManagerInterface $entityManager
        ): Response
    {
        $slugify = new Slugify();
        $season->setSlug($slugify->slugify($season->getName()));
        $form = $this->createForm(SeasonType::class, $season);
        $form->add('submit',SubmitType::class,[
            'label' => 'Edit Season',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValseason_slug()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_season_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('season/edit.html.twig', [
            'season' => $season,
            'form' => $form,
        ]);
    }

    #[Route('/{season_slug}/delete', name: 'app_season_delete', methods: ['POST'],requirements: ['season_slug' => '[a-z1\d\-]+'])]
    public function delete(
        Request $request, 
        #[MapEntity(mapping: ['season_slug' => 'slug'])] Season $season, 
        EntityManagerInterface $entityManager
        ): Response
    {
        if ($this->isCsrfTokenValseason_slug('delete'.$season->getseason_slug(), $request->request->get('_token'))) {
            $entityManager->remove($season);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_season_index', [], Response::HTTP_SEE_OTHER);
    }
}
