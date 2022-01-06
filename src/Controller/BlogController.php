<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
	/**
	 *  @Route("/", name="home")
	 */
	public function home()
	{
		return $this->render('blog/home.html.twig', [
         'title' => "PROFIL",
         
        ]);
		
	}
    /**
	 *  @Route("/cv", name="cv")
	 */	
    public function cv()
    {
        return $this->render('blog/cv.html.twig', [
            'title'=> "CV",
        ]);
    }
}
