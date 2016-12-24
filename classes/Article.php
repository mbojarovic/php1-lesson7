<?php

/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 12/18/2016
 * Time: 8:42 PM
 */
class Article
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;

    }

    public function getArticle()
    {
        return $this->text;
    }
}