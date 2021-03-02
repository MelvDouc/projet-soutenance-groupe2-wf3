<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoriesRepository, SousCategoriesRepository $souscategoriesRepository): Response
    {
        $cookie = new Cookie('foo', 'bar', strtotime('Wed, 28-Dec-2016 15:00:00 +0100'), '/', '.example.com', true, true, true);
        $categories = $categoriesRepository->findAll();
        $sousCategories = $souscategoriesRepository->findAll();
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);

    
    }

    // /**
    //  * @Route("/", name="home")
    //  */
    // public function createCookie($obj): Response {
    //     $cookie = new Cookie(
    //         'my_cookie',    // Cookie name.
    //         $obj->getValue(),    // Cookie value.
    //         time() + ( 2 * 365 * 24 * 60 * 60)  // Expires 2 years.
    // );
    // }
}
