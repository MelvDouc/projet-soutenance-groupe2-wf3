<?php

namespace App\Controller;


use App\Entity\Newsletter;
use App\Form\NewsletterType;
use App\Repository\NewsletterRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="inscription_newsletter")
     */
    public function index(Request $request, NewsletterRepository $newsletterRepository): Response
    {
        $formulaireNewsletter = $this->createForm(NewsletterType::class);
        $formulaireNewsletter->handleRequest($request);

        if ($formulaireNewsletter->isSubmitted() && $formulaireNewsletter->isValid()) {
        $email = $formulaireNewsletter->getData();
        
            $this->addFlash(
                'success',
                'Votre inscription a bien été prise en compte.'
            );
            
            return $this->redirectToRoute('home');   
        }

        return $this->render('admin/newsletterForm.html.twig', [
            'formulaireNewsletter' => $formulaireNewsletter->createView(),
        ]);
    }
}
