<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Underline extends Html
{
    protected $_ID = 'pwc-html-underline';
    protected $_tag = 'u';

    use BuilderTrait;
}
