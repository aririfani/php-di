<?php

namespace App\Models\Article;

interface ArticleRepository
{
    /**
     * @return void
     */
    public function getArticles();

    /**
     * @param integer $id
     * @return void
     */
    public function getArticle($id);
}