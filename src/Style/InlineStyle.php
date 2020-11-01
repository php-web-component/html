<?php namespace PWC\Html\Style;

use PWC\BuilderTrait;
use PWC\Html\Style;

class InlineStyle extends Style {
    protected $_mode = 'inline';

    use BuilderTrait;
}
