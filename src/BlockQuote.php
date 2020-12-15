<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class BlockQuote extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('blockquote');
    }
}