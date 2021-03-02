<?php

namespace App\Controller;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeclarationConfidentialiteController extends AbstractController
{
    /**
     * @Route("/declaration-confidentialite", name="declaration_confidentialite")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('declaration_confidentialite/index.html.twig', [
            'controller_name' => 'DeclarationConfidentialiteController',
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}
