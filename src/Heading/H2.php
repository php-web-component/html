<?php namespace PWC\Component\Html\Heading;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Heading;

class H2 extends Heading
{
    protected $_ID = 'pwc-html-heading-2';
    protected $_level = 2;

    public function level(int $level = 2)
    {
        return $this;
    }

    use BuilderTrait;
}
