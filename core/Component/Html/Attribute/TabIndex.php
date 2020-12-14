<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class TabIndex extends Attribute
{
    use BuilderTrait;

    protected $_name = 'tabIndex';
}
