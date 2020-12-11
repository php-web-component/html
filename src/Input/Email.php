<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Email extends Input
{
    protected $_ID = 'pwc-html-input-email';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('email');
    }

    use BuilderTrait;
}
