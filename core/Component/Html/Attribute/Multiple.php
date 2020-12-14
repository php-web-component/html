<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Multiple extends Attribute
{
    use BuilderTrait;

    protected $_name = 'multiple';
    protected $_value = 'multiple';
}
