<?php

namespace App\Controller;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuiSommesNousController extends AbstractController
{
    /**
     * @Route("/qui-sommes-nous", name="qui_sommes_nous")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('qui_sommes_nous/index.html.twig', [
            'controller_name' => 'QuiSommesNousController',
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}
