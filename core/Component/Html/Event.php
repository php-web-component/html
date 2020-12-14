<?php namespace PWC\Component\Html;

use PWC\Component\Property;

class Event extends Property
{
    protected $_name = '';

    public function name()
    {
        return $this->_name;
    }
}
