<?php namespace PWC\Component\Html\ListContainer;

use PWC\BuilderTrait;
use PWC\Component\Html\ListContainer;

class UnOrderedList extends ListContainer
{
    protected $_ID = 'pwc-html-listContainer-unOrdered';
    protected $_type = 'u';

    use BuilderTrait;
}
