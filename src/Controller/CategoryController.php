<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;


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
        return $this->render('category/index.html.twig', [
            'page_title' => 'Categories',
            'categories' => $categories,
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
