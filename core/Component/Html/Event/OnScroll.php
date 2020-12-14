<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnScroll extends Event
{
    use BuilderTrait;

    protected $_name = 'onscroll';
}