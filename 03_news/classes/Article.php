<?php

class Article
{
    protected $fullText = '';
    protected $shortText = '';

    public function __construct(string $shortText, string $fullText)
    {
        $this->shortText = $shortText;
        $this->fullText = $fullText;
    }

    public function getFullText():string
    {
        return $this->fullText;
    }

    public function getShortText():string
    {
        return $this->shortText;
    }


}