<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnWaiting extends Event
{
    use BuilderTrait;

    protected $_name = 'onwaiting';
}