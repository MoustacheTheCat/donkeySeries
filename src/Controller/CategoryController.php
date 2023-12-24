<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Form\CategoryType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

#[Route('/category', name: 'app_category')]
class CategoryController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'page_title' => 'Categories',
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: '_new', methods: ["GET","POST"])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class,$category) ;
        $form->add('submit',SubmitType::class,[
            'label' => 'Add category',
            'attr' => [
                'class' => 'btn btn-dark',
            ]
        ]);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($category);
            $em->flush();
            $this->addFlash('success','Category created');
            return $this->redirectToRoute('app_category_shows');
        }
        return $this->render('category/new.html.twig', [
            'page_title' => 'New Category',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{categoryName}', name: '_show', methods: ["GET"],requirements: ['categoryName' => '[a-z\-]+'])]
    public function show(string $categoryName, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->findOneBy(['name' => $categoryName]);
        return $this->render('category/show.html.twig', [
            'page_title' => 'Category '.$category->getName(),
            'category' => $category,
            'programs' => $category->getPrograms()->slice(($category->getPrograms()->count())-3),
        ]); 
    }
    
}
