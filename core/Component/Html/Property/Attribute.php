<?php namespace PWC\Component\Html\Property;

use PWC\Component\Property;
use PWC\Component\Property\BuilderTrait;
use PWC\Component\Html\Property\Attribute\Id;

class Attribute extends Property
{
    protected Id $id;

    use BuilderTrait;
}
