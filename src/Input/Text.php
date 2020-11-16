<?php namespace PWC\Component\Html\Input;

class Text extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('text');
    }

    use \PWC\BuilderTrait;
}
