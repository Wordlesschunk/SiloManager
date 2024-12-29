<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    
    #[Route('/silo', name: 'app_render_silo')]
    public function renderSilo(): Response
    {
        return $this->render('index/silo.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    
    #[Route('/back', name: 'app_render_silo_back')]
    public function renderBack(): Response
    {
        return $this->render('index/backdrop.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
