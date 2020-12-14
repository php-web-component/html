<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class ColSpan extends Attribute
{
    use BuilderTrait;

    protected $_name = 'colspan';
}
