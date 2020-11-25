<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class DocType extends Html
{
    protected $_ID = 'pwc-html-doctype';
    protected $_tag = '!DOCTYPE';
    protected $_selfClose = true;

    public function render(): string
    {
        $value = implode(' ', array_map(function ($item) {
            return (string) $item;
        }, $this->_children));

        if (empty(trim($value))) {
            return '';
        }

        return "<{$this->_tag} {$value}>";
    }

    use BuilderTrait;
}
