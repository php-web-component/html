<?php namespace PWC\Component\Html\Input;

class Telephone extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('tel');
    }

    use \PWC\BuilderTrait;
}
