<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Table extends Html
{
    protected $_ID = 'pwc-html-table';
    protected $_tag = 'table';

    use BuilderTrait;
}
