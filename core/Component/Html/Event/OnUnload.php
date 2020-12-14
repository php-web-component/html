<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnUnload extends Event
{
    use BuilderTrait;

    protected $_name = 'onunload';
}
