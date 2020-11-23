<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Radio extends Input
{
    protected $_ID = 'pwc-html-input-radio';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('radio');
    }

    use BuilderTrait;
}
