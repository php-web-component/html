<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Strong extends Html
{
    protected $_ID = 'pwc-html-strong';
    protected $_tag = 'strong';

    use BuilderTrait;
}
