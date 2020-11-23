<?php namespace PWC\Component;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\HtmlTrait;

class Html extends Component
{
    protected $_ID = 'pwc-html';

    protected $_tag = 'html';
    protected $_selfClose = false;
    protected $_attributes = [];

    protected $docType = '!DOCTYPE html';

    public function render(): string
    {
        $docType = get_class($this) == Html::class ? "<{$this->docType}>" : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->_selfClose) {
            return "{$docType}<{$this->_tag}{$attributes} />";
        } else {
            return "{$docType}<{$this->_tag}{$attributes}>" . parent::render() . "</{$this->_tag}>";
        }
    }

    use BuilderTrait, HtmlTrait;
}
