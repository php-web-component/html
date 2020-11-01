<?php namespace PWC\Html\Body\Heading;

use PWC\BuilderTrait;
use PWC\Html\Body\Heading;

class H3 extends Heading {
    protected $_level = 3;

    public function level(int $level = 3)
    {
        return $this;
    }

    use BuilderTrait;
}
