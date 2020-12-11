<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Title extends Html
{
    protected $_ID = 'pwc-html-title';
    protected $_tag = 'title';

    use BuilderTrait;
}
