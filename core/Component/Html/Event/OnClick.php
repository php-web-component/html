<?php namespace PWC\Component\Html\Event;

use PWC\Component\Html\Event;
use PWC\Component\Property\BuilderTrait;

class OnClick extends Event
{
    use BuilderTrait;

    protected $_name = 'onclick';
}
