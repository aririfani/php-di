<?php

namespace App\Repositories;

use App\Models\Article\Article;
use App\Models\Article\ArticleRepository;

class InMemoryArticleRepository implements ArticleRepository
{
    /**
     * @var Article
     */
    private $articles;

    public function __construct()
    {
        $this->articles = [
            1 => new Article(1, 'Hello world','article hello world'),
            2 => new Article(2, 'Lorem Ipsum','lorem ipsum content')
        ];
    }

    /**
     * @return void
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param integer $id
     * @return void
     */
    public function getArticle($id)
    {
        return $this->articles[$id];
    }
}