<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Range extends Input
{
    protected $_ID = 'pwc-html-input-range';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('range');
    }

    use BuilderTrait;
}
