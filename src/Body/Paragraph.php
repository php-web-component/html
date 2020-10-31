<?php namespace PWC\Html\Body;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Paragraph extends Html {
    protected $_tag = 'p';

    use BuilderTrait, ComponentTrait;
}
