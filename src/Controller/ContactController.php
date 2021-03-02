<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer, CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();

        $formulaireContact = $this->createForm(ContactType::class);
        $formulaireContact->handleRequest($request);

        if ($formulaireContact->isSubmitted() && $formulaireContact->isValid()) {
            if ($_FILES['contact']['tmp_name']['fichier'] != null) { 
            $contact = $formulaireContact->getData();
            
            $mail = (new \Swift_Message('Projet Sport - demande de contact'))
                ->attach(\Swift_Attachment::fromPath($_FILES['contact']['tmp_name']['fichier'])->setFilename($_FILES['contact']['name']['fichier']))
                ->setFrom($contact['email'])
                ->setTo('wfsport.contact@gmail.com')
                ->setBody(
                    $this->renderView(
                        'contact/emailContact.html.twig', [
                            'nom' => $contact['nom'],
                            'prenom' => $contact['prenom'],
                            'email' => $contact['email'],
                            'motif' => $contact['motif'],
                            'numerodecommande' => $contact['numerodecommande'],
                            'description' => $contact['description'],
                        ],
                    ),
                    'text/html'
                );
            } else {
                $contact = $formulaireContact->getData();
                $mail = (new \Swift_Message('Projet Sport - demande de contact'))
                ->setFrom($contact['email'])
                ->setTo('wfsport.contact@gmail.com')
                ->setBody(
                    $this->renderView(
                        'contact/emailContact.html.twig', [
                            'nom' => $contact['nom'],
                            'prenom' => $contact['prenom'],
                            'email' => $contact['email'],
                            'motif' => $contact['motif'],
                            'numerodecommande' => $contact['numerodecommande'],
                            'description' => $contact['description'],
                        ],
                    ),
                    'text/html'
                );}
            $mailer->send($mail);
            $this->addFlash(
                'success',
                'Votre message a bien été envoyé. Nous vous répondrons le plus rapidement possible.'
            );
            return $this->redirectToRoute('home');
        }    

        return $this->render('contact/contact.html.twig', [
            'formulaireContact' => $formulaireContact->createView(),
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}