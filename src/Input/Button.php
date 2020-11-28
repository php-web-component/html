<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Button extends Input
{
    protected $_ID = 'pwc-html-input-button';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('button');
    }

    use BuilderTrait;
}
