<?php namespace PWC\Component\Html\Input;

class Password extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('password');
    }

    use \PWC\BuilderTrait;
}
