<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Attribute\Type;
use PWC\Component\Html\Input;

class Telephone extends Input
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_attributes->push(Type::build('tel'));
    }
}
