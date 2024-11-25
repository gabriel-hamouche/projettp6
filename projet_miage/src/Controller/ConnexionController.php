<?php

namespace App\Controller;

use App\Entity\Developpeur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ConnexionDeveloppeurType;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'app_connexion', methods:['GET','POST'])]
    public function index(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        $form = $this->createForm(ConnexionDeveloppeurType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $prenom = $data->getPrenom();
            $nom = $data->getNom();
            $repository = $em->getRepository(Developpeur::class);

            $user = $repository->findOneBy([
                'prenom' => $prenom,
                'nom' => $nom
            ]);
            if($user){
                $session->set('dev_is_logged_in', true);
                return $this->redirectToRoute('app_home_page', [], Response::HTTP_SEE_OTHER);//envoie sur la page comme quoi on est bien connecté

            }else{
                return $this->redirectToRoute('app_home_page', [
                    
                ], Response::HTTP_SEE_OTHER);//envoie sur la page de base si il a rien trouvé

            }
        }

        
        return $this->renderForm('connexion/connexion.html.twig', [
            'form' => $form,
        ]);
    }
}
