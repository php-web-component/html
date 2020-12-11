<?php namespace PWC\Component\Html\Style;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Style;

class InlineStyle extends Style
{
    protected $_ID = 'pwc-html-style-inline';
    protected $_mode = 'inline';

    public static function register($source)
    {}

    use BuilderTrait;
}
