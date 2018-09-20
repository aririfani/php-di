<?php

use function DI\Create;
use App\Models\Article\ArticleRepository;
use App\Repositories\InMemoryArticleRepository;

return [
    // bind an interface to implementor
    ArticleRepository::class => create(InMemoryArticleRepository::class),

    //configuration twig
    Twig_Environment::class => function () {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/App/Views');
        return new Twig_Environment($loader);
    }
];