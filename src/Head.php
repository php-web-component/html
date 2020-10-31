<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Head extends Html {
    protected $_tag = 'head';

    use BuilderTrait, ComponentTrait;
}
