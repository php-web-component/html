<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Label extends Html
{
    protected $_ID = 'pwc-html-label';
    protected $_tag = 'label';

    public function for($for = null)
    {
        return $this->attributes(['for' => $for]);
    }

    use BuilderTrait;
}
