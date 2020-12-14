<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Disabled extends Attribute
{
    use BuilderTrait;

    protected $_name = 'disabled';
    protected $_value = 'disabled';
}
