<?php namespace PWC\Component\Html\Attribute;

use PWC\Component\Html\Attribute;
use PWC\Component\Property\BuilderTrait;

class AcceptCharset extends Attribute
{
    use BuilderTrait;

    protected $_name = 'accept-charset';
}
