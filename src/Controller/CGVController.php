<?php

namespace App\Controller;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CGVController extends AbstractController
{
    /**
     * @Route("/cgv", name="cgv")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {        
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('cgv/index.html.twig', [
            'controller_name' => 'CGVController',
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}
