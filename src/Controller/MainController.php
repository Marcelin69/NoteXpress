<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/index', name: 'app_main')]
    public function index(
        CategoryRepository $categories,
        NoteRepository $not
    ): Response
    {
        
        return $this->render('main/index.html.twig', [
            'categorie' =>  $categories -> findAll() ,
            'notes' =>$not ->findAll(),
        ]);
    }
}
