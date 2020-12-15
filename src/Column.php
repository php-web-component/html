<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Column extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('col');
        $this->_selfClose->set(true);
    }
}
