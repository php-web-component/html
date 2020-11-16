<?php namespace PWC\Component\Html\Input;

class CheckBox extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('checkbox');
    }

    use \PWC\BuilderTrait;
}
