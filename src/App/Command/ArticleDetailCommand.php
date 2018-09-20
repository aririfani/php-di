<?php

use App\Models\Article\ArticleRepository;
use Symfony\Component\Console\Output\OutputInterface;

class ArticleDetailCommand
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    /**
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param integer $id
     * @param OutputInterface $output
     * @return void
     */
    public function __invoke($id, OutputInterface $output)
    {
        $article = $this->repository->getArticle($id);
        $output->writeln('<info>' . $article->getTitle() . '</info>');
        $output->writeln($article->getContent());
    }
}