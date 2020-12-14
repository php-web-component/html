<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class ListItem extends Html
{
    protected $_ID = 'pwc-html-listItem';
    protected $tag = 'li';

    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('li');
    }
}
