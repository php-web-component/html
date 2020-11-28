<?php namespace PWC\Component\Html\Button;

use PWC\BuilderTrait;
use PWC\Component\Html\Button;

class Reset extends Button
{
    protected $_ID  = 'pwc-html-button-reset';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('reset');
    }

    use BuilderTrait;
}
