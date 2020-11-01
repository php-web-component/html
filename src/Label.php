<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Label extends Html
{
    protected $_tag = 'label';

    public function for($for = null)
    {
        return $this->attributes(['for' => $for]);
    }

    use BuilderTrait;
}
