<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig',[
            'title'=>'Testing the page'
        ]);
    }

    /**
     * @Route("/movie/{title}",name="movie_title")
     */
    public function movies($title = null): JsonResponse
    {

        if($title)
        {
            $title = $title;
        }
        else
        {
            $title = 'All Movies';
        }
        
        return $this->json([
            'message'=>'This movie name found',
            'movie'=>$title
        ]);
    }
}
