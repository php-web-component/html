<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Hidden extends Attribute
{
    use BuilderTrait;

    protected $_name = 'hidden';
    protected $_value = 'hidden';
}
