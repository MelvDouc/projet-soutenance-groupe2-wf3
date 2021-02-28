<?php

namespace App\Controller;


use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $sessionInterface, ProduitsRepository $produitsRepository)
    {
        $panier = $sessionInterface->get('panier', []);

        $monPanier = [];

        foreach($panier as $id => $quantite) {
            $monPanier[] = [
                'produit' => $produitsRepository->find($id),
                'quantite' => $quantite
            ];
        }

        $total = 0;

        foreach($monPanier as $produit) {
            $totalProduit = $produit['produit']->getPrix() * $produit['quantite'];
            $total += $totalProduit;
        }

        return $this->render('panier/panier.html.twig', [
            'mesProduits' => $monPanier,
            'total' => $total
        ]);
    }

    /**
     * @Route("/panier/ajout/{id}", name="panier_ajout")
     */
    public function ajoutProduit($id, SessionInterface $sessionInterface) {

        $monPanier = $sessionInterface->get('panier', []);

        if(!empty($monPanier[$id])) {
            $monPanier[$id]++;
        } else {
            $monPanier[$id] = 1;
        }

        $sessionInterface->set('panier', $monPanier);
        
        return $this->redirectToRoute("panier");
    }

    /**
     * @Route("/panier/suppression/{id}", name="panier_supression")
     */
    public function supressionProduit($id, SessionInterface $sessionInterface) {

        $monPanier = $sessionInterface->get('panier', []);

        if(!empty($monPanier[$id])) {
            unset($monPanier[$id]);
        }

        $sessionInterface->set('panier', $monPanier);
        
        return $this->redirectToRoute("panier");
     }
}
