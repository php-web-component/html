<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\ListContainer\UnOrdered;

class ListContainer extends Html
{
    use BuilderTrait;

    public ?UnOrdered $_unOrdered;

    protected function _init()
    {
        parent::_init();

        if (is_null($this->_unOrdered)) {
            $this->_tag->set('ol');
        } else {
            $this->_tag->set('ul');
        }
    }
}
