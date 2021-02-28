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
     * @Route("/tous-les-produits", name="produits")
     */
    public function index(ProduitsRepository $produitsRepository): Response
    {
        $produits = $this->getDoctrine()->getRepository(Produits::class)->findAll();
        return $this->render('produit/produit.html.twig', [
            'produits' => $produits
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

    /**
     * @Route("/admin/produits/update-{id}", name="produit_update")
     */
    public function updateProduit(ProduitsRepository $produitsRepository, $id, Request $request)
    {
        $produit = $produitsRepository->find($id);
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_produits'), $nomImg); // déplace l'image
                $produit->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($produit);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le produit a bien été modifié.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'édition du produit'
                );
            }
            return $this->redirectToRoute('admin_produits');
        }
        return $this->render('admin/produitForm.html.twig', [
            'produitForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/produits/delete-{id}", name="produit_delete")
     */
    public function deleteProduit(ProduitsRepository $produitsRepository, $id)
    {
        $produit = $produitsRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($produit);
        $manager->flush();
        $this->addFlash(
            'success',
            'Le produit a bien été supprimé'
        );
        return $this->redirectToRoute('admin_produits');
    }

    /**
     * @Route("/admin/produits/create", name="produit_create")
     */
    public function createproduit(Request $request)
    {
        $produit = new Produits();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_produits'), $nomImg); // déplace l'image
                $produit->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($produit);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le produit a bien été ajouté.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout du produit'
                );
            }
            return $this->redirectToRoute('admin_produits');
        }
        return $this->render('admin/produitForm.html.twig', [
            'produitForm' => $form->createView()
        ]);
        
    }

}
