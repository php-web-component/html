<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Month extends Input
{
    protected $_ID = 'pwc-html-input-month';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('month');
    }

    use BuilderTrait;
}
