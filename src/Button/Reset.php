<?php namespace PWC\Html\Button;

use PWC\BuilderTrait;
use PWC\Html\Button;

class Reset extends Button
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('reset');
    }

    use BuilderTrait;
}
