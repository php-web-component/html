<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Bold extends Html
{
    protected $_ID = 'pwc-html-bold';
    protected $_tag = 'b';

    use BuilderTrait;
}
