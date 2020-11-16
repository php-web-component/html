<?php namespace PWC\Component\Html;

class HorizontalLine extends \PWC\Component\Html
{
    protected $_tag = 'hr';
    protected $_selfClose = true;

    use \PWC\BuilderTrait;
}
