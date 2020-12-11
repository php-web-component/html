<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Time extends Input
{
    protected $_ID = 'pwc-html-input-time';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('time');
    }

    use BuilderTrait;
}
