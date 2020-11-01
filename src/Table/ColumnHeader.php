<?php namespace PWC\Html\Table;

use PWC\BuilderTrait;
use PWC\Html;

class ColumnHeader extends Html
{
    protected $_tag = 'th';

    use BuilderTrait;
}
