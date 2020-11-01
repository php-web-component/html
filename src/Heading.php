<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Heading extends Html {
    protected $_tag = 'h';
    protected $_level = 1;

    public function render()
    {
        $this->_tag .= $this->_level;
        return parent::render();
    }

    public function level(int $level = 1)
    {
        $this->_level = $level;
        return $this;
    }

    use BuilderTrait;
}
