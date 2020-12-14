<?php namespace PWC\Component\Html\Button;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Attribute\Type;
use PWC\Component\Html\Button;

class Submit extends Button
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_attributes->push(Type::build('submit'));
    }
}
