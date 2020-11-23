<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Paragraph extends Html
{
    protected $_ID = 'pwc-html-paragraph';
    protected $_tag = 'p';

    use BuilderTrait;
}
