<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {
        $formulaireContact = $this->createForm(ContactType::class);
        $formulaireContact->handleRequest($request);



        return $this->render('contact/contact.html.twig', [
            'formulaireContact' => $formulaireContact->createView(),
        ]);
    }
}
