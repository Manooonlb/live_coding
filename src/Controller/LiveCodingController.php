<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[IsGranted('ROLE_USER')]
class LiveCodingController extends AbstractController
{
    #[Route('/live/coding', name: 'app_live_coding')]
    public function index(ArticleRepository $articleRepository): Response
    {
        // dd($articleRepository->findAll());
        return $this->render('live_coding/index.html.twig', [
            'controller_name' => 'LiveCodingController',
        ]);
    }

    #[IsGranted('ROLE_SUPER_ADMIN')]
    #[Route('/live/coding/{id}', name: 'app_live_coding_show')]
    public function show(Article $article): Response
    {
        dd($article);
    }
}
