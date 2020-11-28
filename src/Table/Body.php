<?php namespace PWC\Component\Html\Table;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Body extends Html
{
    protected $_ID = 'pwc-html-table-body';
    protected $_tag = 'tbody';

    use BuilderTrait;
}
