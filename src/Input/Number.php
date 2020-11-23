<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Number extends Input
{
    protected $_ID = 'pwc-html-input-number';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('number');
    }

    use BuilderTrait;
}
