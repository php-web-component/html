<?php namespace PWC\Html\Heading;

use PWC\BuilderTrait;
use PWC\Html\Heading;

class H2 extends Heading {
    protected $_level = 2;

    public function level(int $level = 2)
    {
        return $this;
    }

    use BuilderTrait;
}
