<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionEvaluationController extends AbstractController
{
    /**
     * @Route("/gestion_evaluation", name="gestion_evaluation")
     */
    public function index(): Response
    {
        return $this->render('gestion_evaluation/index.html.twig', [
            'controller_name' => 'GestionEvaluationController',
        ]);
    }
    /**
     * @Route ("/", name="home")
     */
    public function home() {
        return $this->render('gestion_evaluation/home.html.twig');
    }
    /**
     * @Route("/gestion_evaluation", name = "form_etudiant")
     */
    public function show() {
        return $this->render('gestion_evaluation/formetudiant.html.twig');  
    }
}
