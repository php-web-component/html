<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnDrop extends Event
{
    use BuilderTrait;

    protected $_name = 'ondrop';
}
