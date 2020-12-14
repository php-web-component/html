<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnLoad extends Event
{
    use BuilderTrait;

    protected $_name = 'onload';
}
