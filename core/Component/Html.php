<?php namespace PWC\Component;

class Html extends \PWC\Component
{
    protected $_tag = 'html';
    protected $_selfClose = false;
    protected $_attributes = [];
    protected $_docType = '!DOCTYPE';

    public function render(): string
    {
        $docType = get_class($this) == \PWC\Component\Html::class ? "{$this->_docType} " : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->_selfClose) {
            return "<{$docType}{$this->_tag}{$attributes} />";
        } else {
            return "<{$docType}{$this->_tag}{$attributes}>" . parent::render() . "</{$this->_tag}>";
        }
    }

    use \PWC\BuilderTrait, \PWC\Component\Html\HtmlTrait;
}
