<?php namespace PWC\Component\Html\Input;

class Email extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('email');
    }

    use \PWC\BuilderTrait;
}
