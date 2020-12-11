<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Row extends Html
{
    protected $_ID = 'pwc-html-table-row';
    protected $_tag = 'tr';

    use BuilderTrait;
}
