<?php

namespace App\Controller;

use App\Repository\DeveloppeurRepository;
use App\Entity\Developpeur;
use App\Entity\Entreprise;
use App\Enum\LangageEnum;

use App\Form\InscriptionDeveloppeurType;
use App\Form\InscriptionEntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
class InscriptionController extends AbstractController
{

    public function __construct(private readonly EntityManagerInterface $em){}
    #[Route('/inscription', name: 'app_inscription_dev', methods:['GET','POST'])]
    public function newDev(Request $requete, EntityManagerInterface $em): Response
    {
        $dev = new Developpeur();
        $form = $this->createForm(InscriptionDeveloppeurType::class, $dev);
        $form->handleRequest($requete);

        if($form->isSubmitted() && $form->isValid()   ){
            $langage = $form->get('langage')->getData(); //en gros je suis obligé de faire ça manuellement sinon il chope pas la valeur
            $dev->setLangage($langage);
            $exp = $form->get('experience')->getData();
            $dev->setExperience($exp); // pareil ici j'ai bien galère
            $em->persist($dev);
            $em->flush();
            return $this->redirectToRoute('app_home_page', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('inscription/dev.html.twig', [
            'dev' => $dev,
            'form' => $form,
        ]);
    }


    #[Route('/inscription/entreprise', name: 'app_inscription_entreprise', methods:['GET','POST'])]
    public function newEntreprise(Request $requete, EntityManagerInterface $em): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(InscriptionEntrepriseType::class, $entreprise);
        $form->handleRequest($requete);

        if($form->isSubmitted() && $form->isValid()   ){
            $techno = $form->get('technologie')->getData(); //en gros je suis obligé de faire ça manuellement sinon il chope pas la valeur
            $entreprise->setTechnologie($techno);
            $exp = $form->get('experience')->getData();
            $entreprise->setExperience($exp); // pareil ici j'ai bien galère
            $em->persist($entreprise);
            $em->flush();
            return $this->redirectToRoute('app_home_page', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('inscription/entreprise.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form,
        ]);
    }

}
