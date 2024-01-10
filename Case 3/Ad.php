<?php
require_once("Content.php");
class Ad extends Content
{
    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }
}