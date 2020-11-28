<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Date extends Input
{
    protected $_ID = 'pwc-html-input-date';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('date');
    }

    use BuilderTrait;
}
