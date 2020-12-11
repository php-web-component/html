<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class File extends Input
{
    protected $_ID = 'pwc-html-input-file';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('file');
    }

    use BuilderTrait;
}
