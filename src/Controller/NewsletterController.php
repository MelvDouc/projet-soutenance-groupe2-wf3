<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;
use App\Repository\NewsletterRepository;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="inscription_newsletter")
     */
    public function index(Request $request, NewsletterRepository $newsletterRepository, \Swift_Mailer $mailer, CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();
        
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
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }

    
    /**
     * @Route("/admin/newsletters", name="admin_newsletters")
     */
    public function indexAdmin(NewsletterRepository $NewsletterRepository): Response
    {
        $newsletters = $NewsletterRepository->findAll();
        return $this->render('admin/newsletters.html.twig', [
            'newsletters' => $newsletters,
        ]);
    }

    /**
     * @Route("/admin/newsletters/update-{id}", name="newsletter_update")
     */
    public function updateNewsletter(NewsletterRepository $NewsletterRepository, $id, Request $request)
    {
        $newsletter = $NewsletterRepository->find($id);
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($newsletter);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La newsletter a bien été modifiée.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'édition de la newsletter'
                );
            }
            return $this->redirectToRoute('admin_newsletters');
        }
        return $this->render('admin/newsletterForm.html.twig', [
            'newsletterForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/newsletters/delete-{id}", name="newsletter_delete")
     */
    public function deleteNewsletter(NewsletterRepository $NewsletterRepository, $id)
    {
        $newsletter = $NewsletterRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($newsletter);
        $manager->flush();
        $this->addFlash(
            'success',
            'La newsletter a bien été supprimée'
        );
        return $this->redirectToRoute('admin_newsletters');
    }

    /**
     * @Route("/admin/newsletters/create", name="newsletter_create")
     */
    public function createnewsletter(Request $request)
    {
        $newsletter = new Newsletter();
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($newsletter);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'La newsletter a bien été ajoutée.'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'ajout de la newsletter'
                );
            }
            return $this->redirectToRoute('admin_newsletters');
        }
        return $this->render('admin/newsletterForm.html.twig', [
            'newsletterForm' => $form->createView()
        ]);
        
    }

}
