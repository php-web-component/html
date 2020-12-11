<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component;

class Icon extends Component
{
    protected $_ID = 'pwc-html-icon';
    protected $type = 'fa';

    public function render(): string
    {
        $name = parent::render();
        return (string) Italic::build()->class("{$this->type} {$this->type}-{$name}");
    }

    public function type($type = 'fa')
    {
        $this->type = $type;
        return $this;
    }

    use BuilderTrait;
}
