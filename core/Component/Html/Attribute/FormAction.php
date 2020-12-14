<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class FormAction extends Attribute
{
    use BuilderTrait;

    protected $_name = 'formaction';
}
