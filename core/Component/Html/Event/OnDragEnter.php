<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnDragEnter extends Event
{
    use BuilderTrait;

    protected $_name = 'ondragenter';
}
