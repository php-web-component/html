<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnStorage extends Event
{
    use BuilderTrait;

    protected $_name = 'onstorage';
}
