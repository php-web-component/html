<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Head\Config;

class Head extends Html
{
    protected $_ID = 'pwc-html-head';
    protected $_tag = 'head';

    public function render(): string
    {
        $this->_children = array_merge(
            Config::get('meta'),
            $this->_children,
            Config::get('style'),
            Config::get('script')
        );

        return parent::render();
    }

    use BuilderTrait;
}
