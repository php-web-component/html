<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Header extends Html
{
    protected $_ID = 'pwc-html-header';
    protected $_tag = 'header';

    use BuilderTrait;
}
