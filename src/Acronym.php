<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Attribute\Title;

class Accronym extends Html
{
    use BuilderTrait;

    public ?Title $title;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('acronym');

        if (!is_null($this->title)) {
            $this->_attributes->push($this->title);
        }
    }
}
