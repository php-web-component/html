<?php namespace PWC\Component\Html\Input;

class Range extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('range');
    }

    use \PWC\BuilderTrait;
}
