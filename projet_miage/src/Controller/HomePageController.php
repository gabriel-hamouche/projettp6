<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [

        ]);
      
    }


    #[Route('/connectedev', name: 'app_connectedevhome_page')]
    public function connectedev(): Response{
        return $this->render('connectedev.html.twig', [

        ]);
    }


}
