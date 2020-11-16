<?php namespace PWC\Component\Html\Input;

class Submit extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('submit');
    }

    use \PWC\BuilderTrait;
}
