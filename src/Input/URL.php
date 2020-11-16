<?php namespace PWC\Component\Html\Input;

class URL extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('url');
    }

    use \PWC\BuilderTrait;
}
