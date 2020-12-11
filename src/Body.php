<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Body\Config;

class Body extends Html
{
    protected $_ID = 'pwc-html-body';
    protected $_tag = 'body';

    public function render(): string
    {
        $this->_children = array_merge(
            $this->_children,
            Config::get('script'),
        );

        return parent::render();
    }

    use BuilderTrait;
}
