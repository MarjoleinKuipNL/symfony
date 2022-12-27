<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
       return new Response('<h1>Welcome world to my index page</h1>');

    }
     /**
     * @Route("/custom", name="custom")
     */
    public function custom(){
        return new Response('<h1>Welcome to Custom page</h1>');
    }
}
