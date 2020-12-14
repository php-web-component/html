<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class DataStore extends Attribute
{
    use BuilderTrait;

    protected $_name = 'data';
    protected $_selfRender = true;

    public function getRaw()
    {
        return $this->_value;
    }

    public function get()
    {
        return implode(' ', array_map(function ($name, $value) {
            return "{$this->_name}-{$name}=\"{$value}\"";
        }, array_keys($this->_value), $this->_value));
    }
}
