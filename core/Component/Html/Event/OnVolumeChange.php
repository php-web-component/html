<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnVolumeChange extends Event
{
    use BuilderTrait;

    protected $_name = 'onvolumechange';
}
