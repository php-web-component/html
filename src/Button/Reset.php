<?php namespace PWC\Component\Html\Button;

class Reset extends \PWC\Component\Html\Button
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('reset');
    }

    use \PWC\BuilderTrait;
}
