<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Reset extends Input
{
    protected $_ID = 'pwc-html-input-reset';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('reset');
    }

    use BuilderTrait;
}
