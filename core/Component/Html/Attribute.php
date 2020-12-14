<?php namespace PWC\Component\Html;

use PWC\Component\Property;
use PWC\Component\Property\BuilderTrait;

class Attribute extends Property
{
    use BuilderTrait;

    protected $_name = '';
    protected $_selfRender = false;

    public function name()
    {
        return $this->_name;
    }

    public function isSelfRender()
    {
        return $this->_selfRender;
    }
}
