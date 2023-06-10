<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage', methods: ['GET'])]
    public function index(
        NoteRepository $notes
    ): Response
    {
        return $this->render('homepage/index.html.twig', [
            'notes' => $notes->findAll(),
        ]);
    }
}
