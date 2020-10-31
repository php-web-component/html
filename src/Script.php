<?php namespace PWC\Html;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html;

class Script extends Html {
    protected $_tag = null;
    protected $_mode = null;

    public function __construct(array $children = [])
    {
        $this->_children = $children;
    }

    public function render()
    {
        if ($this->_mode == 'internal') {
            return '<script type="text/javascript">' . implode('', array_map(function ($name, $script) {
                return $script . (substr($script, -1) == ';' ? '' : ';');
            }, array_keys($this->_children), $this->_children)) . '</script>';
        } elseif ($this->_mode == 'inline') {
            return '<!-- not ready yet --!>';
        } else {
            return implode('', array_map(function ($name, $script) {
                if (is_array($script)) {
                    $attributes = implode(' ', array_map(function ($scriptName, $scriptValue) {
                        return "{$scriptName}=\"{$scriptValue}\"";
                    }, array_keys($script), $script));
                    $attributes = empty(trim($attributes)) ? '' : " {$attributes}";
                    return "<script{$attributes}></script>";
                } else {
                    return "<script src=\"{$script}\" type=\"text/javascript\"></script>";
                }
            }, array_keys($this->_children), $this->_children));
        }
    }

    use BuilderTrait, ComponentTrait;
}
