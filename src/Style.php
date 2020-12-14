<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Attribute\Href;
use PWC\Component\Html\Attribute\Rel;
use PWC\Component\Html\Attribute\Type;

class Style extends Html
{
    use BuilderTrait;

    public ?Rel $rel;
    public ?Type $type;
    public ?Href $href;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('link');
        $this->_selfClose->set(true);

        if (is_null($this->rel)) {
            $this->rel = Rel::build('stylesheet');
        }
        
        if (is_null($this->type)) {
            $this->type = Type::build('text/css');
        }

        $this->_attributes->push($this->type);
        $this->_attributes->push($this->rel);

        if (!is_null($this->href)) {
            $this->_attributes->push($this->href);
        }
    }
}
