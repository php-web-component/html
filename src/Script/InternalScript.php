<?php namespace PWC\Component\Html\Script;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Script;

class InternalScript extends Script
{
    use BuilderTrait;

    private $__tempChildren = [];

    protected function _init()
    {
        if (!is_null($this->source)) {
            $this->source = null;
        }

        $this->__tempChildren = $this->_children;

        parent::_init();
    }

    public function render(): string
    {
        $this->_children = [
            "\n" . implode("\n", array_map(function ($script) {
                return $script . (substr($script, -1) == ';' ? '' : ';');
            }, $this->__tempChildren)) . "\n"
        ];

        return parent::render();
    }
}
