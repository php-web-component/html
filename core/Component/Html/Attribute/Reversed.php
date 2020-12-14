<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class Reversed extends Attribute
{
    use BuilderTrait;

    protected $_name = 'reversed';
    protected $_value = 'reversed';
}
