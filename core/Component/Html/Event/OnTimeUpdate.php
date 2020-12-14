<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnTimeUpdate extends Event
{
    use BuilderTrait;

    protected $_name = 'ontimeupdate';
}
