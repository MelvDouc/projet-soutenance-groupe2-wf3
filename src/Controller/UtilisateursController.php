<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/admin/utilisateurs", name="admin_utilisateurs")
     */
    public function index(): Response
    {
        return $this->render('admin/utilisateurs.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);
    }
}
