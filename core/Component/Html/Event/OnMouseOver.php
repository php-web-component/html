<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnMouseOver extends Event
{
    use BuilderTrait;

    protected $_name = 'onmouseover';
}
