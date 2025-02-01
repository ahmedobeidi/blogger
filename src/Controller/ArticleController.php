<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function showAll(): Response
    {
        return $this->render('article/index.html.twig');
    }
}
