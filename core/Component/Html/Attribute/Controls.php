<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Controls extends Attribute
{
    use BuilderTrait;

    protected $_name = 'controls';
    protected $_value = 'controls';
}
