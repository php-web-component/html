<?php namespace PWC\Html\Head;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Style extends Html {
    protected $_tag = null;
    protected $_selfCLose = null;
    protected $_mode = null;

    public function __construct(array $children = [])
    {
        $this->_children = $children;
    }

    public function render()
    {
        if ($this->_mode == 'internal') {
            return "<style>" . implode(' ', array_map(function ($name, $value) {
                return "{$name} {" . implode('', array_map(function ($valName, $valValue) {
                    return "{$valName}:{$valValue};";
                }, array_keys($value), $value)) . "}";
            }, array_keys($this->_children), $this->_children)) . "</style>";
        } elseif ($this->_mode == 'inline') {
            return implode('', array_map(function ($name, $value) {
                return "{$name}:{$value};";
            }, array_keys($this->_children), $this->_children));
        } else {
            return implode('', array_map(function ($name, $style) {
                if (is_array($style)) {
                    $attributes = implode(' ', array_map(function ($styleName, $styleValue) {
                        return "{$styleName}=\"{$styleValue}\"";
                    }, array_keys($style), $style));
                    $attributes = empty(trim($attributes)) ? '' : " {$attributes}";

                    return "<link rel=\"stylesheet\"{$attributes} />";
                } else {
                    return "<link rel=\"stylesheet\" href=\"{$style}\" />";
                }
            }, array_keys($this->_children), $this->_children));
        }
    }

    use BuilderTrait, ComponentTrait;
}
