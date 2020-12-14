<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Heading extends Html
{
    use BuilderTrait;

    public int $level = 3;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set("h{$this->level}");
    }
}
