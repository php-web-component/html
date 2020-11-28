<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;

class Form extends Html
{
    protected $_ID = 'pwc-html-form';
    protected $_tag = 'form';

    public function action($action = '')
    {
        return $this->attributes(['action' => $action]);
    }

    public function method($method = 'get')
    {
        return $this->attributes(['method' => $method]);
    }

    use BuilderTrait;
}
