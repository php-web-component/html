<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Style extends Attribute
{
    use BuilderTrait;

    protected $_name = 'style';

    public function get()
    {
        if (is_array($this->_value)) {
            return implode(' ', array_map(function ($name, $value) {
                return "{$name}:{$value};";
            }, array_keys($this->_value), $this->_value));
        } else {
            return (string) $this->_value;
        }
    }
}
