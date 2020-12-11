<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class ListContainer extends Html
{
    protected $_ID = 'pwc-html-listContainer';
    protected $_tag = 'l';
    protected $_type = 'unordered';

    public function render(): string
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
