<?php namespace PWC\Html\ListContainer;

use PWC\BuilderTrait;
use PWC\Html\ListContainer;

class UnOrderedList extends ListContainer
{
    protected $_type = 'u';

    use BuilderTrait;
}
