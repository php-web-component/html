<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Async extends Attribute
{
    use BuilderTrait;

    protected $_name = 'async';
}
