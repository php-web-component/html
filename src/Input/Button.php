<?php namespace PWC\Component\Html\Input;

class Button extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('button');
    }

    use \PWC\BuilderTrait;
}
