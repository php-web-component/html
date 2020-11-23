<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Submit extends Input
{
    protected $_ID = 'pwc-html-input-submit';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('submit');
    }

    use BuilderTrait;
}
