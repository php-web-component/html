<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Label extends Attribute
{
    use BuilderTrait;

    protected $_name = 'label';
}
