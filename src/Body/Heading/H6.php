<?php namespace PWC\Html\Body\Heading;

use PWC\BuilderTrait;
use PWC\Html\Body\Heading;

class H6 extends Heading {
    protected $_level = 6;

    public function level(int $level = 6)
    {
        return $this;
    }

    use BuilderTrait;
}
