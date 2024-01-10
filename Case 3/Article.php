<?php
require_once("Content.php");
class Article extends Content
{
    private bool $isBreakingNews;
    public function __construct(string $title, string $text, bool $isBreakingNews)
    {
        parent::__construct($title, $text);
        $this->isBreakingNews = $isBreakingNews;
    }

    public function showTitle()
    {
        if ($this->isBreakingNews) return "BREAKING: " . $this->title;
        else return $this->title;
    }
}