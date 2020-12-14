<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnPopState extends Event
{
    use BuilderTrait;

    protected $_name = 'onpopstate';
}
