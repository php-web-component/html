<?php namespace PWC\Component\Html\Style;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Attribute\Href;
use PWC\Component\Html\Attribute\Rel;
use PWC\Component\Html\Style;

class InternalStyle extends Style
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('style');
        $this->_selfClose->set(false);

        $this->_attributes->pull(Href::class);
        $this->_attributes->pull(Rel::class);
    }

    private function __renderStyle()
    {
        return implode("\n", array_map(function ($name, $value) {
            return "{$name} {" . implode('', array_map(function ($valName, $valValue) {
                return "{$valName}:{$valValue};";
            }, array_keys($value), $value)) . "}";
        }, array_keys($this->_children), $this->_children));
    }

    public function render(): string
    {
        $tag = $this->_tag->get();
        $attributes = $this->_renderAttributes();
        $styles = $this->__renderStyle();

        return "<{$tag}{$attributes}>\n{$styles}\n</{$tag}>";
    }
}
