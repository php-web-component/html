<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Column extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('td');
    }
}
