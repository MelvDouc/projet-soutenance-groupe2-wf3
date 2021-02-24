<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategorieType;
use App\Repository\CategoriesRepository;
use App\Entity\SousCategories;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/admin/categories", name="admin_categories")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $souscategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $souscategoriesRepository->findAll();
        return $this->render('admin/categories.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }

    /**
     * @Route("/admin/categorie/create", name="categorie_create")
     */
    public function createCategorie(Request $request)
    {
        $categorie = new Categories();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le categorie a bien été ajouté.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout de la categorie'
                );
            }
            return $this->redirectToRoute('admin_categories');
        }
        return $this->render('admin/categorieForm.html.twig', [
            'categorieForm' => $form->createView()
        ]);
        
    }

    /**
     * @Route("/admin/categorie/update-{id}", name="categorie_update")
     */
    public function updateCategorie(CategoriesRepository $categoriesRepository, $id, Request $request)
    {
        $categorie = $categoriesRepository->find($id);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($categorie);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le categorie a bien été modifiée'
            );
            return $this->redirectToRoute('admin_categories');
        }
        return $this->render('admin/categorieForm.html.twig', [
            'categorieForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/categorie/delete-{id}", name="categorie_delete")
     */
    public function deleteCategorie(CategoriesRepository $categoriesRepository, $id)
    {
        $categorie = $categoriesRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($categorie);
        $manager->flush();
        $this->addFlash(
            'success',
            'Le categorie a bien été supprimé'
        );
        return $this->redirectToRoute('admin_categories');
    }

}
