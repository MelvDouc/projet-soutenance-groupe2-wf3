<?php

namespace App\Controller;

use App\Form\SousCategorieType;
use App\Entity\SousCategories;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SousCategoriesController extends AbstractController
{
    /**
     * @Route("/sous-categorie/football", name="souscategorie_football")
     */
    public function football(CategoriesRepository $categoriesRepository,SousCategoriesRepository $sousCategoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('sousCategories/sousCategoriesFootball.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories
        ]);
    }

    /**
     * @Route("/sous-categorie/basketball", name="souscategorie_basketball")
     */
    public function basketball(CategoriesRepository $categoriesRepository,SousCategoriesRepository $sousCategoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('sousCategories/sousCategoriesBasketball.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories
        ]);
    }

    /**
     * @Route("/sous-categorie/handball", name="souscategorie_handball")
     */
    public function handball(CategoriesRepository $categoriesRepository,SousCategoriesRepository $sousCategoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('sousCategories/sousCategoriesHandball.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories
        ]);
    }

    /**
     * @Route("/sous-categorie/volleyball", name="souscategorie_volleyball")
     */
    public function volleyball(CategoriesRepository $categoriesRepository,SousCategoriesRepository $sousCategoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        return $this->render('sousCategories/sousCategoriesVolleyball.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories
        ]);
    }

    /**
     * @Route("/admin/sous-categorie/create", name="sous_categorie_create")
     */
    public function createSousCategorie(Request $request)
    {
        $sous_categorie = new SousCategories();
        $form = $this->createForm(SousCategorieType::class, $sous_categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_sous_categories'), $nomImg); // déplace l'image
                $sous_categorie->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($sous_categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La sous-categorie a bien été ajouté.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout de la sous-categorie'
                );
            }
            return $this->redirectToRoute('admin_sous_categories');
        }
        return $this->render('admin/sousCategorieForm.html.twig', [
            'sousCategorieForm' => $form->createView()
        ]);
    }    
    
    /**
    * @Route("/admin/sous-categorie/create/popup", name="sous_categorie_create_popup")
    */
   public function createPopupSousCategorie(Request $request)
   {
       $sous_categorie = new SousCategories();
       $form = $this->createForm(SousCategorieType::class, $sous_categorie);
       $form->handleRequest($request);
       if ($form->isSubmitted()) {
           if ($form->isValid()) {
               $infoImg = $form['img']->getData(); // récupère les infos de l'image
               $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
               $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
               $infoImg->move($this->getParameter('dossier_photos_sous_categories'), $nomImg); // déplace l'image
               $sous_categorie->setImg($nomImg);
               $manager = $this->getDoctrine()->getManager();
               $manager->persist($sous_categorie);
               $manager->flush();
               $this->addFlash(
                   'success',
                   'La sous-categorie a bien été ajouté.'
               );
           } else {
               $this->addFlash(
                   'danger',
                   'Une erreur est survenue lors de l\'ajout de la sous-categorie'
               );
           }
       }
       return $this->render('admin/sousCategoriePopupForm.html.twig', [
           'sousCategorieForm' => $form->createView()
       ]);
   }

    /**
     * @Route("/admin/sous-categorie/update-{id}", name="sous_categorie_update")
     */
    public function updateSousCategorie(SousCategoriesRepository $souscategoriesRepository, $id, Request $request)
    {
        $sousCategorie = $souscategoriesRepository->find($id);
        $form = $this->createForm(SousCategorieType::class, $sous_categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $infoImg = $form['img']->getData(); // récupère les infos de l'image
                $extensionImg = $infoImg->guessExtension(); // récupère le format de l'image
                $nomImg = time() . '.' . $extensionImg; // compose un nom d'image unique
                $infoImg->move($this->getParameter('dossier_photos_sous_categories'), $nomImg); // déplace l'image
                $sous_categorie->setImg($nomImg);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($sous_categorie);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La sous-categorie a bien été modifiée.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'édition de la sous-categorie'
                );
            }
            return $this->redirectToRoute('admin_sous_categories');
        }
        return $this->render('admin/sousCategorieForm.html.twig', [
            'sousCategorieForm' => $form->createView()
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
            'La sous-catégorie a bien été supprimée'
        );
        return $this->redirectToRoute('admin_categories');
    }
}
