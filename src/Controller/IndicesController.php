<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndicesController extends AbstractController
{

    public $listeIndices = [
     "indice1",
    "indice2",
    "indice3","indice4",
    ];



    #[Route('/indices', name: 'app_indices')]
    public function index(): Response
    {
        return $this->render('indices/index.html.twig', [
            'controller_name' => 'IndicesController',
            'listeIndices' => $this->listeIndices,
        ]);
    }


   #[Route('/indice1', name: 'indice1')]
    public function indice1(): Response
    {
        return $this->render('indices/show1.html.twig', [
        ]);
    } 

    #[Route('/indice2', name: 'indice2')]
    public function indice2(): Response
    {
        return $this->render('indices/show2.html.twig', [
        ]);
    } 
    
    #[Route('/indice3', name: 'indice3')]
    public function indice3(): Response
    {
        return $this->render('indices/show3.html.twig', [
        ]);
    }

    #[Route('/indice4', name: 'indice4')]
    public function indice4(): Response
    {
        return $this->render('indices/show4.html.twig', [
        ]);
    }


}
