<?php namespace PWC\Component\Html\Table;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class Foot extends Html
{
    protected $_ID = 'pwc-html-table-foot';
    protected $_tag = 'tfoot';

    use BuilderTrait;
}
