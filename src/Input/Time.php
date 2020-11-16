<?php namespace PWC\Component\Html\Input;

class Time extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('time');
    }

    use \PWC\BuilderTrait;
}
