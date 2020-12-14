<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnDrag extends Event
{
    use BuilderTrait;

    protected $_name = 'ondrag';
}
