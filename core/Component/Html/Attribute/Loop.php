<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Loop extends Attribute
{
    use BuilderTrait;

    protected $_name = 'loop';
    protected $_value = 'loop';
}
