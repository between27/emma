<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CadeauxController extends AbstractController
{


    #[Route('/stitch', name: 'cadeau1')]
    public function stitch(): Response
    {
        return $this->render('cadeaux/stitch.html.twig', [
            'controller_name' => 'CadeauxController',
        ]);
    }

    #[Route('/films', name: 'cadeau2')]
    public function pikachu(): Response
    {
        return $this->render('cadeaux/films.html.twig', [
            'controller_name' => 'CadeauxController',
        ]);
    }

    #[Route('/slt', name: 'cadeau3')]
    public function SLTTUNUU(): Response
    {
        return $this->render('cadeaux/chats.html.twig', [
            'controller_name' => 'CadeauxController',
        ]);
    }


    #[Route('/geek', name: 'cadeau4')]
    public function geek(): Response
    {
        return $this->render('cadeaux/hp.html.twig', [
            'controller_name' => 'CadeauxController',
        ]);
    }
}
