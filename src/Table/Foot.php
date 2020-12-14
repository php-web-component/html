<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Foot extends Html
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('tfoot');
    }
}
