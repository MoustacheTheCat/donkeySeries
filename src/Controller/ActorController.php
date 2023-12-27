<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\ActorType;
use App\Repository\ActorRepository;

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

#[Route('/actor')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'app_actor_index', methods: ['GET'])]
    public function index(ActorRepository $actorRepository): Response
    {
        return $this->render('actor/index.html.twig', [
            'actors' => $actorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_actor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $slugify = new Slugify();
        $actor = new Actor();
        $actor->setSlug($slugify->slugify($actor->getName()));
        $form = $this->createForm(ActorType::class, $actor);
        $form->add('submit',SubmitType::class,[
            'label' => 'Add Actor',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValactor_slug()) {
            $entityManager->persist($actor);
            $entityManager->flush();

            return $this->redirectToRoute('app_actor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actor/new.html.twig', [
            'actor' => $actor,
            'form' => $form,
        ]);
    }

    #[Route('/{actor_slug}', name: 'app_actor_show', methods: ['GET'],requirements: ['actor_slug' => '[a-z\-]+'])]
    public function show(#[MapEntity(mapping: ['actor_slug' => 'slug'])]Actor $actor): Response
    {
        
        return $this->render('actor/show.html.twig', [
            'page_title' => $actor->getName(),
            'actor' => $actor,
            'series' => $actor->getPrograms()->ToArray(),
        ]);
    }
    

    #[Route('/{actor_slug}/edit', name: 'app_actor_edit', methods: ['GET', 'POST'],requirements: ['actor_slug' => '[a-z\-]+'])]
    public function edit(Request $request, Actor $actor, EntityManagerInterface $entityManager): Response
    {
        $slugify = new Slugify();
        $actor->setSlug($slugify->slugify($actor->getName()));
        $form = $this->createForm(ActorType::class, $actor);
        $form->add('submit',SubmitType::class,[
            'label' => 'Edit Actor',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValactor_slug()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_actor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actor/edit.html.twig', [
            'actor' => $actor,
            'form' => $form,
        ]);
    }

    #[Route('/{actor_actor_slug}/delete', name: 'app_actor_delete', methods: ['POST'],requirements: ['actor_actor_slug' => '[a-z\-]+'])]
    public function delete(Request $request, Actor $actor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValactor_slug('delete'.$actor->getactor_slug(), $request->request->get('_token'))) {
            $entityManager->remove($actor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actor_index', [], Response::HTTP_SEE_OTHER);
    }
}
