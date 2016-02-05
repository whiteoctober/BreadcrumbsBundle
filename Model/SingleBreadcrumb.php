<?php

namespace WhiteOctober\BreadcrumbsBundle\Model;

class SingleBreadcrumb
{
    public $url;
    public $text;
    public $translationParameters;
    public $domain;

    public function __construct($text = "", $url = "", array $translationParameters = array(), $domain = null)
    {
        $this->url = $url;
        $this->text = $text;
        $this->translationParameters = $translationParameters;
        $this->domain = $domain;
    }
}
