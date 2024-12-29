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
    
    #[Route('/menu', name: 'app_render_menu')]
    public function renderMenu(): Response
    {
        return $this->render('index/menu.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
