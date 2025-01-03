<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\SecurityRequestAttributes;


use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(SessionInterface $session): Response
    {
        return $this->render('base.html.twig');
        
      
    }


    #[Route('/connectedev', name: 'app_connectedevhome_page')]
    public function connectedev(): Response{
        return $this->render('connectedev.html.twig', [

        ]);
    }

    #[Route('/connecteentre', name: 'app_entrehome_page')]
    public function connecteentre(): Response{
        return $this->render('connecteentre.html.twig', [

        ]);
    }

    #[Route('/choix', name: 'app_choixinscription_page')]
    public function choix(): Response{
        return $this->render('choix.html.twig', [

        ]);
    }

}
