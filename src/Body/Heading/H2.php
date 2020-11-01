<?php namespace PWC\Html\Body\Heading;

use PWC\BuilderTrait;
use PWC\Html\Body\Heading;

class H2 extends Heading {
    protected $_level = 2;

    public function level(int $level = 2)
    {
        return $this;
    }

    use BuilderTrait;
}
