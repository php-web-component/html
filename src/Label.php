<?php namespace PWC\Component\Html;

class Label extends \PWC\Component\Html
{
    protected $_tag = 'label';

    public function for($for = null)
    {
        return $this->attributes(['for' => $for]);
    }

    use \PWC\BuilderTrait;
}
