<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Anchor extends Html
{
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
