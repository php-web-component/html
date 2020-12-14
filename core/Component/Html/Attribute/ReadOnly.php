<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class ReadOnly extends Attribute
{
    use BuilderTrait;

    protected $_name = 'readonly';
}
