<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class SetDefault extends Attribute
{
    use BuilderTrait;

    protected $_name = 'default';
    protected $_value = 'default';
}
