<?php namespace PWC\Component\Html\Input;

use PWC\BuilderTrait;
use PWC\Component\Html\Input;

class Image extends Input
{
    protected $_ID = 'pwc-html-input-image';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('image');
    }

    use BuilderTrait;
}
