<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Head extends Html
{
    protected $_ID = 'pwc-html-table-head';
    protected $_tag = 'thead';

    use BuilderTrait;
}
