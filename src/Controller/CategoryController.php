<?php

namespace App\Controller;
use App\Entity\Program;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'app_category')]
class CategoryController extends AbstractController
{
    #[Route('/', name: '_shows', methods: ["GET"])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        dump($categories);
        return $this->render('category/index.html.twig', [
            'page_title' => 'Categories',
            'categories' => $categories,
        ]);
    }
    #[Route('/{categoryName<^[a-zA-Z\À-ù]+$>}', name: '_show', methods: ["GET"],requirements: ['categoryName' => '[a-zA-Z\À-ù]+'])]
    public function show(Category $category): Response
    {
        return $this->render('category/show.html.twig', [
            'page_title' => 'Category '.$category->getName(),
            'category' => $category,
            'programs' => $category->getPrograms()->slice(($category->getPrograms()->count())-3),
        ]);
    }
}
