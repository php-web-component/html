<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Aside extends Html
{
    protected $_ID = 'pwc-html-aside';
    protected $_tag = 'aside';

    use BuilderTrait;
}
