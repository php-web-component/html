<?php namespace PWC\Html\Heading;

use PWC\BuilderTrait;
use PWC\Html\Heading;

class H5 extends Heading {
    protected $_level = 5;

    public function level(int $level = 5)
    {
        return $this;
    }

    use BuilderTrait;
}
