<?php namespace PWC\Component;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\DocType;
use PWC\Component\Html\HtmlTrait;

class Html extends Component
{
    protected $_ID = 'pwc-html';

    protected $_tag = 'html';
    protected $_selfClose = false;
    protected $_attributes = [];

    protected ?DocType $docType = null;

    public function render(): string
    {
        $docType = get_class($this) == Html::class ? (string) ($this->docType ?? DocType::build('html')) : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->_selfClose) {
            return "{$docType}<{$this->_tag}{$attributes} />";
        } else {
            return "{$docType}<{$this->_tag}{$attributes}>" . parent::render() . "</{$this->_tag}>";
        }
    }

    protected function _decorate($component)
    {
        parent::_decorate($component);

        $this->_attributes = array_merge($this->_attributes, $component->_attributes);
    }

    use BuilderTrait, HtmlTrait;
}
