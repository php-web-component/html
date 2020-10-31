<?php namespace PWC\Html\Body;

use PWC\ComponentTrait;
use PWC\Html;

class Heading extends Html {
    protected $tag = 'h';

    protected $level = 1;

    public function __construct(...$children)
    {
        parent::__construct(...$children);
    }

    public function render()
    {
        $this->tag .= $this->level;

        return parent::render();
    }

    use ComponentTrait;
}
