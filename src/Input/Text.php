<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Text extends Input
{
    protected $_ID = 'pwc-html-input-text';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('text');
    }

    use BuilderTrait;
}
