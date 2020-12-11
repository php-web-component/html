<?php namespace PWC\Component\Html\ListContainer;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\ListContainer;

class OrderedList extends ListContainer
{
    protected $_ID = 'pwc-html-listContainer-ordered';
    protected $_type = 'o';

    use BuilderTrait;
}
