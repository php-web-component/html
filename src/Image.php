<?php namespace PWC\Component\Html;

class Image extends \PWC\Component\Html
{
    protected $_tag = 'img';
    protected $_selfClose = true;

    public function source($src = '')
    {
        return $this->attributes(['src' => $src]);
    }

    use \PWC\BuilderTrait;
}
