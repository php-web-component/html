<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Checked extends Attribute
{
    use BuilderTrait;

    protected $_name = 'checked';
    protected $_value = 'checked';
}
