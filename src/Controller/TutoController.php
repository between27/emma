<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutoController extends AbstractController
{
    #[Route('/tuto', name: 'app_tuto')]
    public function index(): Response
    {
        return $this->render('tuto/index.html.twig', [
            'controller_name' => 'TutoController',
        ]);
    }


    #[Route('/test1', name: 'test1')]
    public function test1(): Response
    {
        return $this->render('tuto/show1.html.twig', [
        ]);
    }

    #[Route('/test2', name: 'test2')]
    public function test2(): Response
    {
        return $this->render('tuto/show2.html.twig', [
        ]);
    }

    
}
