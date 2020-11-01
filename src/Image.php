<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Image extends Html
{
    protected $_tag = 'img';
    protected $_selfClose = true;

    public function source($src = '')
    {
        return $this->attributes(['src' => $src]);
    }

    use BuilderTrait;
}
