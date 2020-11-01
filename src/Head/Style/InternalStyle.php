<?php namespace PWC\Html\Head\Style;

use PWC\BuilderTrait;
use PWC\Html\Head\Style;

class InternalStyle extends Style {
    protected $_mode = 'internal';

    use BuilderTrait;
}
