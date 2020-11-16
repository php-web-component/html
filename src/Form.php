<?php namespace PWC\Component\Html;

class Form extends \PWC\Component\Html
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

    use \PWC\BuilderTrait;
}
