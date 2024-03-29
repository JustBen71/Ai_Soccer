<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    #[IsGranted("ROLE_USER")]
    #[Route('/user', name: 'app_profil')]
    public function index(): Response
    {

        return $this->render('user/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
