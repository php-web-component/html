<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class Hidden extends Input
{
    protected $_ID = 'pwc-html-input-hidden';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('hidden');
    }

    use BuilderTrait;
}
