<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnInput extends Event
{
    use BuilderTrait;

    protected $_name = 'oninput';
}
