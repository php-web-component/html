<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Body extends Html {
    protected $_tag = 'body';

    use BuilderTrait, ComponentTrait;
}
