<?php namespace PWC\Html\Head;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Title extends Html {
    protected $_tag = 'title';

    use BuilderTrait, ComponentTrait;
}
