<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Bold extends Html
{
    protected $_ID = 'pwc-html-bold';
    protected $_tag = 'b';

    use BuilderTrait;
}
