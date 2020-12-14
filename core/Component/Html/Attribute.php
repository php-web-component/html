<?php namespace PWC\Component\Html;

use PWC\Component\Property;
use PWC\Component\Property\BuilderTrait;

class Attribute extends Property
{
    use BuilderTrait;

    protected $_name = '';

    public function name()
    {
        return $this->_name;
    }
}
