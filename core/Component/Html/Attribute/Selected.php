<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Selected extends Attribute
{
    use BuilderTrait;

    protected $_name = 'selected';
    protected $_value = 'selected';
}
