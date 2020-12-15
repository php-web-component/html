<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Source extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('source');
        $this->_selfClose->set(true);
    }
}
