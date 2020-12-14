<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnPlay extends Event
{
    use BuilderTrait;

    protected $_name = 'onplay';
}
