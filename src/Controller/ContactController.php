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
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $formulaireContact = $this->createForm(ContactType::class);
        $formulaireContact->handleRequest($request);
        if ($formulaireContact->isSubmitted() && $formulaireContact->isValid()) {
            $contact = $formulaireContact->getData();
            $mail = (new \Swift_Message('Projet Sport - demande de contact'))
                ->setFrom($contact['email'])
                ->setTo('contact.elibird@gmail.com')
                ->setBody(
                    $this->renderView(
                        'contact/emailContact.html.twig', [
                            'nom' => $contact['nom'],
                            'prenom' => $contact['prenom'],
                            'email' => $contact['email'],
                            'motif' => $contact['motif'],
                            'numerodecommande' => $contact['numerodecommande'],
                            'description' => $contact['description'],
                            'fichier' => $contact['fichier'],
                        ],
                    ),
                    'text/html'
                )
                ->attach(\Swift_Attachment::fromPath('public/img'))
            ;
            $mailer->send($mail);
            $this->addFlash(
                'success',
                'Votre message a bien été envoyé. Nous vous répondrons le plus rapidement possible.'
            );
            return $this->redirectToRoute('home');
        }    

        return $this->render('contact/contact.html.twig', [
            'formulaireContact' => $formulaireContact->createView(),
        ]);
    }
}
