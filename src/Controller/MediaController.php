<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MediaController extends AbstractController
{
    /**
     * @Route("/medias", name="media")
     */
    public function index()
    {
        return $this->render('media/index.html.twig', [
            'controller_name' => 'MediaController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('media/home.html.twig', [
            'title' => "Bienvenue dans la médiathèque",
            'age' => 31
        ]);
    }

    /**
     * @Route("/medias/12", name="medias_show")
     */
    public function show(){
        return $this->render('media/show.html.twig');
    }
}
