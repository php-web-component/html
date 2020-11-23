<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Button extends Html
{
    protected $_ID = 'pwc-html-button';
    protected $_tag = 'button';
    protected $_attributes = [
        'type' => 'button'
    ];

    public function type($type = 'button')
    {
        unset($this->_attributes['type']);
        return $this->attributes(['type' => $type]);
    }

    public function name($name = null)
    {
        return $this->attributes(['name' => $name]);
    }

    public function value($value = null)
    {
        return $this->attributes(['value' => $value]);
    }

    use BuilderTrait;
}
