<?php namespace PWC\Component\Html\Heading;

use PWC\BuilderTrait;
use PWC\Component\Html\Heading;

class H4 extends Heading
{
    protected $_ID = 'pwc-html-heading-4';
    protected $_level = 4;

    public function level(int $level = 4)
    {
        return $this;
    }

    use BuilderTrait;
}
