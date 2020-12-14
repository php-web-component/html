<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Attribute\Async;
use PWC\Component\Html\Attribute\CharSet;
use PWC\Component\Html\Attribute\Defer;
use PWC\Component\Html\Attribute\Source;
use PWC\Component\Html\Attribute\Type;

class Script extends Html
{
    use BuilderTrait;

    public ?Source $source;
    public ?Type $type;
    public ?Async $async;
    public ?CharSet $charset;
    public ?Defer $defer;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('script');

        if (is_null($this->type)) {
            $this->type = Type::build('text/javascript');
        }

        $this->_attributes->push($this->type);

        if (!is_null($this->source)) {
            $this->_attributes->push($this->source);
        }

        if (!is_null($this->async)) {
            $this->_attributes->push($this->async);
        }

        if (!is_null($this->charset)) {
            $this->_attributes->push($this->charset);
        }

        if (!is_null($this->defer)) {
            $this->_attributes->push($this->defer);
        }

        $this->_children = [];
    }

    public function render(): string
    {
        return parent::render();
    }
}
