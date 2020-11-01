<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\Html;

class Form extends Html
{
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
