<?php namespace PWC\Component\Html\Input;

class Radio extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('radio');
    }

    use \PWC\BuilderTrait;
}
