<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Color extends Input
{
    protected $_ID = 'pwc-html-input-color';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('color');
    }

    use BuilderTrait;
}
