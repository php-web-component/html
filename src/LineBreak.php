<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class LineBreak extends Html
{
    protected $_tag = 'br';
    protected $_selfCole = true;

    use BuilderTrait;
}
