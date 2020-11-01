<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Input extends Html
{
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

    use BuilderTrait;
}
