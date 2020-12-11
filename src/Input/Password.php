<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Password extends Input
{
    protected $_ID = 'pwc-html-input-password';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('password');
    }

    use BuilderTrait;
}
