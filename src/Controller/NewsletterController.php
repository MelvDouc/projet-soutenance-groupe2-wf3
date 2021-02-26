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
    public function index(Request $request, NewsletterRepository $newsletterRepository, \Swift_Mailer $mailer): Response
    {
        // $newsletter = new Newsletter();

        $formulaireNewsletter = $this->createForm(NewsletterType::class);
        $formulaireNewsletter->handleRequest($request);

        if ($formulaireNewsletter->isSubmitted() && $formulaireNewsletter->isValid()) {
        $newsletter = $formulaireNewsletter->getData();
        

        $mail = (new \Swift_Message('Inscription à la Newsletter'))
                ->setFrom('contact.elibird@gmail.com')
                ->setTo($newsletter['email'])
                ->setBody(
                    $this->renderView(
                        'newsletter/newsletterContact.html.twig', [
                            // 'email' => $newsletter->getEmail('email')
                            'email' => $newsletter['email']
                        ],
                    ),
                    'text/html'
                )
            ;
            
            $mailer->send($mail);
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($newsletter);
            // $em->flush();
            $this->addFlash(
                'success',
                'Votre inscription a bien été prise en compte.'
            );
            
            return $this->redirectToRoute('home');   
        }

        return $this->render('newsletter/newsletter.html.twig', [
            'formulaireNewsletter' => $formulaireNewsletter->createView(),
        ]);
    }
}
