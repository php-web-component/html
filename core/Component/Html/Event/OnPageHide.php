<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnPageHide extends Event
{
    use BuilderTrait;

    protected $_name = 'onpagehide';
}
