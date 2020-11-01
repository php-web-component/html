<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class ListContainer extends Html
{
    protected $_tag = 'l';
    protected $_type = 'unordered';

    public function render()
    {
        switch ($this->_type) {
            case 'o':
            case 'ordered':
                $this->_tag = "o{$this->_tag}";
            break;
            case 'u':
            case 'unordered':
            default:
                $this->_tag = "u{$this->_tag}";
            break;
        }

        return parent::render();
    }

    use BuilderTrait;
}
