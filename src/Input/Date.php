<?php namespace PWC\Component\Html\Input;

class Date extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('date');
    }

    use \PWC\BuilderTrait;
}
