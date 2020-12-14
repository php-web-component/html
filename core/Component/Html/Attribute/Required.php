<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Required extends Attribute
{
    use BuilderTrait;

    protected $_name = 'required';
    protected $_value = 'required';
}
