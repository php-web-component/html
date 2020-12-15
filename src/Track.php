<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Track extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('track');
        $this->_selfClose->set(true);
    }
}
