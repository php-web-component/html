<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Anchor extends Html
{
    protected $_ID = 'pwc-html-anchor';
    protected $_tag = 'a';
    protected $_attributes = [
        'href' => ''
    ];

    public function href($url = '')
    {
        return $this->attributes(['href' => $url]);
    }

    use BuilderTrait;
}
