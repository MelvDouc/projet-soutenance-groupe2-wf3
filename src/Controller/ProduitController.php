<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitType;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/produit.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @Route("/produit-{id}", name="voir_produit")
     */
    public function voir($id) {
        $produit = $this->getDoctrine()->getRepository(Produits::class)->find($id);

        return $this->render('produit/produit.html.twig', [
            'produit' => $produit
        ]);
    }

    /**
     * @Route("/admin/produits", name="admin_produits")
     */
    public function indexAdmin(ProduitsRepository $produitsRepository): Response
    {
        $produits = $produitsRepository->findAll();
        return $this->render('admin/produits.html.twig', [
            'produits' => $produits,
        ]);
    }
}
