<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class HorizontalLine extends Html
{
    protected $_ID = 'pwc-html-horizontalLine';
    protected $_tag = 'hr';
    protected $_selfClose = true;

    use BuilderTrait;
}
