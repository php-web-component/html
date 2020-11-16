<?php namespace PWC\Component\Html\Input;

class Color extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('color');
    }

    use \PWC\BuilderTrait;
}
