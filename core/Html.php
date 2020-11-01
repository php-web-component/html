<?php namespace PWC;

use PWC\Html\HtmlTrait;

class Html extends Component {
    protected $_tag = 'html';
    protected $_selfClose = false;
    protected $_attributes = [];
    protected $_docType = '!DOCTYPE';

    public function render()
    {
        $docType = get_class($this) == Html::class ? "{$this->_docType} " : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->_selfClose) {
            return "<{$docType}{$this->_tag}{$attributes} />";
        } else {
            return "<{$docType}{$this->_tag}{$attributes}>" . parent::render() . "</{$this->_tag}>";
        }
    }

    use BuilderTrait, HtmlTrait;
}
