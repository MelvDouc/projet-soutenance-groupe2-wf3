<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index(): Response
    {
        return $this->render('categories/categories.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }

}
