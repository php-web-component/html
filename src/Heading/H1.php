<?php namespace PWC\Component\Html\Heading;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Heading;

class H1 extends Heading
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('h1');
    }
}
