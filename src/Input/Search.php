<?php namespace PWC\Component\Html\Input;

class Search extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('search');
    }

    use \PWC\BuilderTrait;
}
