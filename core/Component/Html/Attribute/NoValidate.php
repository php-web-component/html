<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class NoValidate extends Attribute
{
    use BuilderTrait;

    protected $_name = 'novalidate';
    protected $_value = 'novalidate';
}
