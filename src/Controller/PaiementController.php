<?php

namespace App\Controller;

use App\Form\PaiementType;
use App\Repository\CategoriesRepository;
use App\Repository\SousCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement", name="paiement")
     */
    public function index(Request $request, \Swift_Mailer $mailer, CategoriesRepository $categoriesRepository, SousCategoriesRepository $sousCategoriesRepository): Response
    {
        $categories = $categoriesRepository->findAll();
        $sousCategories = $sousCategoriesRepository->findAll();

        $formulairePaiement = $this->createForm(PaiementType::class);
        $formulairePaiement->handleRequest($request);

        if ($formulairePaiement->isSubmitted() && $formulairePaiement->isValid()) {
            $paiement = $formulairePaiement->getData();
            $mail = (new \Swift_Message('WF-Sport - Validation de paiement'))
                ->setFrom('contact.elibird@gmail.com')
                ->setTo($paiement['email'])
                ->setBody(
                    $this->renderView(
                        'paiement/emailPaiement.html.twig', [
                            'nom' => $paiement['nom'],
                            'prenom' => $paiement['prenom'], ],
                    ),
                    'text/html'
                )
            ;
            $mailer->send($mail);
            $this->addFlash(
                'success',
                'Votre paiement a bien été pris en compte'
            );
            return $this->redirectToRoute('paiement');
        }

        return $this->render('paiement/index.html.twig', [
            'formulairePaiement' => $formulairePaiement->createView(),
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ]);
    }
}

