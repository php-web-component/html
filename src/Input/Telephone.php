<?php namespace PWC\Html\Input;

use PWC\BuilderTrait;
use PWC\Html\Input;

class Telephone extends Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('tel');
    }

    use BuilderTrait;
}
