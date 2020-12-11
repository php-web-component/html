<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class LineBreak extends Html
{
    protected $_ID = 'pwc-html-lineBreak';
    protected $_tag = 'br';
    protected $_selfCole = true;

    use BuilderTrait;
}
