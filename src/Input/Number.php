<?php namespace PWC\Component\Html\Input;

class Number extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('number');
    }

    use \PWC\BuilderTrait;
}
