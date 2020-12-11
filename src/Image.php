<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Image extends Html
{
    protected $_ID = 'pwc-html-image';
    protected $_tag = 'img';
    protected $_selfClose = true;

    public function source($src = '')
    {
        return $this->attributes(['src' => $src]);
    }

    use BuilderTrait;
}
