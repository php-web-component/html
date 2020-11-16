<?php namespace PWC\Component\Html\Input;

class Month extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('month');
    }

    use \PWC\BuilderTrait;
}
