<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class URL extends Input
{
    protected $_ID = 'pwc-html-input-url';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('url');
    }

    use BuilderTrait;
}
