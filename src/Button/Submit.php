<?php namespace PWC\Component\Html\Button;

class Submit extends \PWC\Component\Html\Button
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('submit');
    }

    use \PWC\BuilderTrait;
}
