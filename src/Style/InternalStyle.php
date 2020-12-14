<?php namespace PWC\Component\Html\Style;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Attribute\Type;
use PWC\Component\Html\Style;

class InternalStyle extends Style
{
    use BuilderTrait;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('style');
        $this->_attributes->push(Type::build('text/css'));
    }

    private function __renderStyle()
    {
        return implode(' ', array_map(function ($name, $value) {
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

        return "<{$tag}{$attributes}>{$styles}</{$tag}>";
    }
}
