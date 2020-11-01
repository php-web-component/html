<?php namespace PWC\Html\ListContainer;

use PWC\BuilderTrait;
use PWC\Html\ListContainer;

class OrderedList extends ListContainer
{
    protected $_type = 'o';

    use BuilderTrait;
}
