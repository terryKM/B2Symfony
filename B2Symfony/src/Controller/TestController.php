<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/test/message", name="message")
     */
    public function message()
    {
        return $this->render('message.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

}
