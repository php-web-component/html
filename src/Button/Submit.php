<?php namespace PWC\Component\Html\Button;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Button;

class Submit extends Button
{
    protected $_ID = 'pwc-html-button-submit';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('submit');
    }

    use BuilderTrait;
}
