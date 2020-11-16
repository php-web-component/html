<?php namespace PWC\Component\Html;

class Meta extends \PWC\Component\Html
{
    protected $_tag = 'meta';
    protected $_selfClose = true;

    public function name($value = null)
    {
        return $this->attributes(['name' => $value]);
    }

    public function content($value = null)
    {
        return $this->attributes(['content' => $value]);
    }

    public function charset($value = null)
    {
        return $this->attributes(['charset' => $value]);
    }

    public function httpEquiv($value = null)
    {
        return $this->attributes(['http-equiv' => $value]);
    }

    use \PWC\BuilderTrait;
}
