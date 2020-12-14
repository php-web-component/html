<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Classes extends Attribute
{
    use BuilderTrait;

    protected $_name = 'class';

    public function get()
    {
        if (!is_null($this->_value)) {
            if (!is_array($this->_value)) {
                if (!is_string($this->_value)) {
                    $this->_value = (string) $this->_value;
                }

                $this->_value = [$this->_value];
            }

            return implode(' ', array_map(function ($class) {
                return $class;
            }, array_unique($this->_value)));
        }

        return '';
    }

    public function add($value = null)
    {
        if (!is_null($value)) {
            if (!in_array($value, $this->_value)) {
                $this->_value[] = $value;
            }
        }

        return $this;
    }
}
