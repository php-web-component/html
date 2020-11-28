<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class CheckBox extends Input
{
    protected $_ID = 'pwc-html-input-checkbox';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('checkbox');
    }

    use BuilderTrait;
}
