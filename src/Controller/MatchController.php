<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class MatchController extends AbstractController
{
    #[IsGranted("ROLE_USER")]
    #[Route('/match', name: 'app_match')]
    public function index(): Response
    {
        return $this->render('match/index.html.twig', [
            'controller_name' => 'MatchController',
        ]);
    }
}
