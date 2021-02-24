<?php

namespace App\Controller;

use App\Entity\SousCategories;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SousCategoriesController extends AbstractController
{
    /**
     * @Route("/admin/sous-categorie/create", name="sous_categorie_create")
     */
    public function createSousCategorie(Request $request)
    {
        $sousCategorie = new SousCategories();
        $form = $this->createForm(SousCategoriesType::class, $sousCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
              
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($sousCategorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La sous-catégorie a bien été ajoutée.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout de la sous-catégorie'
                );

            return $this->redirectToRoute('admin_sous_categories');
        }
        return $this->render('admin/sousCategoriesForm.html.twig', [
            'sousCategoriesForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/sous-categorie/update-{id}", name="sous_categorie_update")
     */
    public function updateSousCategorie(SousCategoriesRepository $souscategoriesRepository, $id, Request $request)
    {
        $sousCategorie = $souscategoriesRepository->find($id);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($souscategorie);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le sous-categorie a bien été modifiée'
            );
            return $this->redirectToRoute('admin_sous-categories');
        }
        return $this->render('admin/sousCategoriesForm.html.twig', [
            'sousCategoriesForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/sous-categorie/delete-{id}", name="sous_categorie_delete")
     */
    public function deleteSousCategorie(SousCategoriesRepository $souscategoriesRepository, $id)
    {
        $sousCategorie = $souscategoriesRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($sousCategorie);
        $manager->flush();
        $this->addFlash(
            'success',
            'Le produit a bien été supprimé'
        );
        return $this->redirectToRoute('admin_sous_categories');
    }
}
