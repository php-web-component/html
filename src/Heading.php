<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Heading extends Html
{
    protected $_ID = 'pwc-html-heading';
    protected $_tag = 'h';
    protected $_level = 1;

    public function render(): string
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
