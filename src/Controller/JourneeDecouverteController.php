<?php

namespace App\Controller;

use App\Entity\JourneeDecouverte;
use App\Entity\Usertypes;
use App\Repository\JourneeDecouverteRepository;
use App\Repository\UsertypesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JourneeDecouverteController extends AbstractController
{

    /**
     * @Route("/journee/decouverte", name="journee_decouverte")
     */
    public function index(JourneeDecouverteRepository $journee_decouverte_repo, UsertypesRepository $usertypes_repo): Response
    {
        /*
        $journee_decouverte = $this->getDoctrine()
            ->getRepository(JourneeDecouverte::class)
            ->findAll();
        */
        $journee_decouverte = $journee_decouverte_repo->findAll();

        /*
        $usertypes = $this->getDoctrine()
            ->getRepository(Usertypes::class)
            ->findAll();
        */
        $usertypes = $usertypes_repo->findAll();

        return $this->render('journee_decouverte/index.html.twig', [
            'controller_name' => 'JourneeDecouverteController',
            // 'journee_decouverte' => $this->journee_decouverte_repo->findAll(),
            // 'usertypes' => $this->usertypes_repo->findAll(),
            'journee_decouverte' => $journee_decouverte,
            'usertypes' => $usertypes,
        ]);
    }
}
