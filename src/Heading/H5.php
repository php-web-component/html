<?php namespace PWC\Component\Html\Heading;

use PWC\BuilderTrait;
use PWC\Component\Html\Heading;

class H5 extends Heading
{
    protected $_ID = 'pwc-html-heading-5';
    protected $_level = 5;

    public function level(int $level = 5)
    {
        return $this;
    }

    use BuilderTrait;
}
