<?php namespace PWC\Component\Html\Attribute;

use PWC\Collection as PWCCollection;
use PWC\Component\Html\Attribute;

class Collection extends PWCCollection
{
    public static $type = Attribute::class;
    public static $includeSubClass = true;
}
