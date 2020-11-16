<?php namespace PWC\Component\Html\Input;

class Week extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('week');
    }

    use \PWC\BuilderTrait;
}
