<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnDoubleClick extends Event
{
    use BuilderTrait;

    protected $_name = 'ondblclick';
}
