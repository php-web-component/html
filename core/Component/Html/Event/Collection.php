<?php namespace PWC\Component\Html\Event;

use PWC\Collection as PWCCollection;
use PWC\Component\Html\Event;

class Collection extends PWCCollection
{
    public static $type = Event::class;
    public static $includeSubClass = true;
}
