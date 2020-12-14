<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnSeeking extends Event
{
    use BuilderTrait;

    protected $_name = 'onseeking';
}
