<?php namespace PWC\Component;

use PWC\Component;
use PWC\Component\Html\DocType;
use PWC\Component\Html\HtmlTrait;
use PWC\Component\Html\Property\Attribute\Collection;

class Html extends Component
{
    protected $tag = 'html';
    protected $selfClose = false;
    protected Collection $attributes;
    protected ?DocType $docType = null;

    public function render(): string
    {
        $docType = get_class($this) == Html::class ? (string) ($this->docType ?? DocType::build('html')) : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->selfClose) {
            return "{$docType}<{$this->tag}{$attributes} />";
        } else {
            return "{$docType}<{$this->tag}{$attributes}>" . parent::render() . "</{$this->tag}>";
        }
    }

    protected function _decorate($component)
    {
        parent::_decorate($component);

        $this->attributes = array_merge($this->attributes, $component->attributes);
    }

    use BuilderTrait, HtmlTrait;
}
