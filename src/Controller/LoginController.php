<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(AuthenticationUtils $authentication): Response
    {
        $error = $authentication->getLastAuthenticationError();
        $LastUser = $authentication->getLastUsername();
        return $this->render('login/index.html.twig', [
            'last_username' => $LastUser,
            'error' => $error,
        ]);
    }

    /**
     * @throws Exception
     */
    #[Route('/logout', name:'logout')]
    public function logout(): void{
        throw new Exception('Oops');
    }
}
