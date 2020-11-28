<?php namespace PWC\Component\Html\Heading;

use PWC\BuilderTrait;
use PWC\Component\Html\Heading;

class H3 extends Heading
{
    protected $_ID = 'pwc-html-heading-3';
    protected $_level = 3;

    public function level(int $level = 3)
    {
        return $this;
    }

    use BuilderTrait;
}
