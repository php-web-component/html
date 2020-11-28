<?php namespace PWC\Component\Html\Heading;

use PWC\BuilderTrait;
use PWC\Component\Html\Heading;

class H6 extends Heading
{
    protected $_ID = 'pwc-html-heading-6';
    protected $_level = 6;

    public function level(int $level = 6)
    {
        return $this;
    }

    use BuilderTrait;
}
