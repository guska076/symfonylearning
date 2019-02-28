<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $response = $this->forward('App\Controller\BlogPostController::index');



        return $response;
//        return $this->render('blog/index.html.twig', [
//            'controller_name' => 'BlogController',
//        ]);
    }
}
