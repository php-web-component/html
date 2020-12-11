<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Section extends Html
{
    protected $_ID = 'pwc-html-section';
    protected $_tag = 'section';

    use BuilderTrait;
}
