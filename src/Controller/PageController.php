<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/projects', name: 'projects_page')]
    public function showProjectsPage(): Response
    {
        return $this->render('page/projects.html.twig');
    }

    #[Route('/contact', name: 'contact_page')]
    public function showContactPage(): Response
    {
        return $this->render('page/contact.html.twig');
    }

    #[Route('/project/{id}', name: 'project_page')]
    public function showProjectPage(): Response
    {
        return $this->render('page/project.html.twig');
    }
}
