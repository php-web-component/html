<?php namespace PWC\Component\Html\Table;

use PWC\BuilderTrait;
use PWC\Component\Html;

class ColumnHeader extends Html
{
    protected $_ID = 'pwc-html-table-columnHeader';
    protected $_tag = 'th';

    use BuilderTrait;
}
