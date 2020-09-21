<?php

namespace App\Controller;

use App\Entity\Main\Article;
use App\Repository\Main\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MediaController extends AbstractController
{
    /**
     * @Route("/medias", name="media")
     * @param ArticleRepository $repo
     * @return Response
     */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();

        return $this->render('media/index.html.twig', [
            'controller_name' => 'MediaController',
            'articles' => $articles
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
     * @Route("/medias/{id}", name="medias_show")
     * @param Article $article
     * @return Response
     */
    public function show(Article $article){
        return $this->render('media/show.html.twig', [
            'article' => $article
        ]);
    }
}
