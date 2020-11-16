<?php namespace PWC\Component\Html\Input;

class Hidden extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('hidden');
    }

    use \PWC\BuilderTrait;
}
