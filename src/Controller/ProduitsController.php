<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitsController extends AbstractController
{
    /**
     * @Route("/produits/{cat}/{sousCat}", name="produits")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository, ProduitsRepository $produitsRepository, $cat, $sousCat): Response
    {
        $catId = $categoriesRepository->findByNom($cat)->getId();
        $sousCatId = $sousCategoriesRepository->findByNom($sousCat)->getId();
        $produits = $produitsRepository->products($catId, $sousCatId);
        return $this->render('produits/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
