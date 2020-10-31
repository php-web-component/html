<?php namespace PWC\Html\Head\Style;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html\Head\Style;

class InlineStyle extends Style {
    protected $_mode = 'inline';

    use BuilderTrait, ComponentTrait;
}
