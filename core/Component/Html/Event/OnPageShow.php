<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnPageShow extends Event
{
    use BuilderTrait;

    protected $_name = 'onpageshow';
}
