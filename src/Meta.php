<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Meta extends Html
{
    protected $_tag = 'meta';
    protected $_selfClose = true;

    use BuilderTrait;
}
