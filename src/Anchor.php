<?php namespace PWC\Component\Html;

class Anchor extends \PWC\Component\Html
{
    protected $_tag = 'a';
    protected $_attributes = [
        'href' => ''
    ];

    public function href($url = '')
    {
        return $this->attributes(['href' => $url]);
    }

    use \PWC\BuilderTrait;
}
