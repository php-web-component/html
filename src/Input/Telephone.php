<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Telephone extends Input
{
    protected $_ID = 'pwc-html-input-telephone';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('tel');
    }

    use BuilderTrait;
}
