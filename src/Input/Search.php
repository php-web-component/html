<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Search extends Input
{
    protected $_ID = 'pwc-html-input-search';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('search');
    }

    use BuilderTrait;
}
