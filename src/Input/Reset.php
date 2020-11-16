<?php namespace PWC\Component\Html\Input;

class Reset extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('reset');
    }

    use \PWC\BuilderTrait;
}
