<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class HorizontalLine extends Html
{
    protected $_tag = 'hr';
    protected $_selfClose = true;

    use BuilderTrait;
}
