<?php namespace PWC\Component\Html\Heading;

use PWC\BuilderTrait;
use PWC\Component\Html\Heading;

class H1 extends Heading
{
    protected $_ID = 'pwc-html-heading-1';
    protected $_level = 1;

    public function level(int $level = 1)
    {
        return $this;
    }

    use BuilderTrait;
}
