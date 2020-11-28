<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Week extends Input
{
    protected $_ID = 'pwc-html-input-week';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('week');
    }

    use BuilderTrait;
}
