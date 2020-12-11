<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Div extends Html
{
    protected $_ID = 'pwc-html-div';
    protected $_tag = 'div';

    use BuilderTrait;
}
