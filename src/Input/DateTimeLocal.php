<?php namespace PWC\Component\Html\Input;

class DateTimeLocal extends \PWC\Component\Html\Input
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('datetime-local');
    }

    use \PWC\BuilderTrait;
}
