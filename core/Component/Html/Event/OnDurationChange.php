<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnDurationChange extends Event
{
    use BuilderTrait;

    protected $_name = 'ondurationchange';
}
