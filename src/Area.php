<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Attribute\AltText;
use PWC\Component\Html\Attribute\Coords;
use PWC\Component\Html\Attribute\Download;
use PWC\Component\Html\Attribute\Href;
use PWC\Component\Html\Attribute\HrefLang;
use PWC\Component\Html\Attribute\Media;
use PWC\Component\Html\Attribute\Rel;
use PWC\Component\Html\Attribute\Shape;
use PWC\Component\Html\Attribute\Target;
use PWC\Component\Html\Attribute\Type;

class Area extends Html
{
    use BuilderTrait;

    // public ?AltText $altText;
    // public ?Coords $coords;
    // public ?Download $download;
    // public ?Href $href;
    // public ?HrefLang $hrefLang;
    // public ?Media $media;
    // public ?Rel $rel;
    // public ?Shape $shape;
    // public ?Target $target;
    // public ?Type $type;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('area');
    }
}
