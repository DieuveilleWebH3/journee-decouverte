<?php

namespace App\Controller;

use PhpParser\Node\Stmt\Return_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    
    // #[Route("/home/page", name:"home_page")]
    
    /**
     @Route("/home/page/{my_name}", name="home_page")
    */
    public function index(string $my_name): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'name' => $my_name,
        ]);
    }
    
    
    // #[Route('/', name: 'my_index')]

    /**
     @Route("/", name="my_index")
    */

    public function my_index(): Response
    {
        return new Response('coucou');
        
        /*
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        */
    }
}
