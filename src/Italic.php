<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Italic extends Html
{
    protected $_ID = 'pwc-html-italic';
    protected $_tag = 'i';

    use BuilderTrait;
}
