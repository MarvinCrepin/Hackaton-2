<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/checkout', name: 'checkout')]
    public function checkout(): Response
    {
        return $this->render('home/checkout.html.twig');
    }
          
    #[Route('/result', name: 'result')]
    public function result(): Response
    {
        return $this->render('home/result.html.twig');
    }

}
