<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Column extends Html
{
    protected $_ID = 'pwc-html-table-column';
    protected $_tag = 'td';

    use BuilderTrait;
}
