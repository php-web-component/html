<?php namespace PWC\Html\Head;

use PWC\ComponentTrait;
use PWC\Html;

class Style extends Html {
    protected $tag = null;
    protected $selfCLose = null;

    protected $mode = null;

    public function __construct(array $children = [])
    {
        $this->children = $children;
    }

    public function render()
    {
        if ($this->mode == 'internal') {
            return "<style>" . implode(' ', array_map(function ($name, $value) {
                return "{$name} {" . implode('', array_map(function ($valName, $valValue) {
                    return "{$valName}:{$valValue};";
                }, array_keys($value), $value)) . "}";
            }, array_keys($this->children), $this->children)) . "</style>";
        } elseif ($this->mode == 'inline') {
            return implode('', array_map(function ($name, $value) {
                return "{$name}:{$value};";
            }, array_keys($this->children), $this->children));
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
            }, array_keys($this->children), $this->children));
        }
    }

    use ComponentTrait;
}
