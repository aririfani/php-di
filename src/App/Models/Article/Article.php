<?php

namespace App\Models\Article;

class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @param integer $id
     * @param string $title
     * @param string $content
     */
    public function __construct($id, $title, $content)
    {
        $this->id       = $id;
        $this->title    = $title;
        $this->content  = $content;
    }

    /**
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return void
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return void
     */
    public function getContent()
    {
        return $this->content;
    }
}