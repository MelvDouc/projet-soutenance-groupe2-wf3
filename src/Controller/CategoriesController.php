<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategorieType;
use App\Entity\SousCategories;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/categorie/{cat}", name="categories")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository, $cat): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        // $catNom = $categoriesRepository->findByNom($cat)->getNom();

        return $this->render('categories/index.html.twig', [
            'cat' => $cat,
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }

    /**
     * @Route("/admin/categories", name="admin_categories")
     */
    public function indexAdmin(CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
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
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_categories'), $nomImg); // déplace l'image
                $categorie->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La categorie a bien été ajouté.'
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
     * @Route("/admin/categorie/create/popup", name="categorie_create_popup")
     */
    public function createPopupCategorie(Request $request)
    {
        $categorie = new Categories();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_categories'), $nomImg); // déplace l'image
                $categorie->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La categorie a bien été ajouté.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout de la categorie'
                );
            }
        }
        return $this->render('admin/categoriePopupForm.html.twig', [
            'categorieForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/categorie/update-{id}", name="categorie_update")
     */
    public function updateCategorie(CategoriesRepository $categoriesRepository, $id, Request $request)
    {
        $categorie = $categoriesRepository->find($id);
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_categories'), $nomImg); // déplace l'image
                $categorie->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La categorie a bien été modifiée.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'édition de la categorie'
                );
            }
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
            'La catégorie a bien été supprimée'
        );
        return $this->redirectToRoute('admin_categories');
    }

}
