<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;

class ListItem extends Html
{
    protected $_ID = 'pwc-html-listItem';
    protected $_tag = 'li';

    use BuilderTrait;
}
