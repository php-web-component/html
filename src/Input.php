<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Input extends Html
{
    protected $_ID = 'pwc-html-input';
    protected $_tag = 'input';
    protected $_selfClose = true;

    protected $_attributes = [
        'type' => 'text'
    ];

    public function type($type = 'text')
    {
        unset($this->_attributes['type']);
        return $this->attributes(['type' => $type]);
    }

    public function name($name = '')
    {
        return $this->attributes(['name' => $name]);
    }

    public function value($value = '')
    {
        return $this->attributes(['value' => $value]);
    }

    use BuilderTrait;
}
