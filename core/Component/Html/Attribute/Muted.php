<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Muted extends Attribute
{
    use BuilderTrait;

    protected $_name = 'muted';
    protected $_value = 'muted';
}
