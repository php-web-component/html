<?php namespace PWC\Component\Html\Input;

class Image extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('image');
    }

    use \PWC\BuilderTrait;
}
