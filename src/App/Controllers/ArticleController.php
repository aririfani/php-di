<?php

namespace App\Controllers;

use Twig_Environment;
use App\Models\Article\ArticleRepository;

class ArticleController
{
    /**
     * @var ArticleRepository
     */
    protected $repository;

    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @param ArticleRepository $repository
     * @param Twig_Environment $twig
     */
    public function __construct(ArticleRepository $repository, Twig_Environment $twig)
    {
        $this->repository = $repository;
        $this->twig       = $twig;
    }

    /**
     * @return void
     */
    public function getAll()
    {
        $articles =  $this->repository->getArticles();

        return $this->twig->render('article.twig',[
            'articles' => $articles
        ]);
    }

    /**
     * @param integer $id
     * @return void
     */
    public function getById($id)
    {
        $article = $this->repository->getArticle($id);

        return $this->twig->render('article-detail.twig',[
            'article' => $article
        ]);
    }
}