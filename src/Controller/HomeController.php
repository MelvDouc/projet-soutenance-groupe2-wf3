<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $souscategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $souscategoriesRepository->findAll();
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}
