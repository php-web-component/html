<?php namespace PWC\Html\Heading;

use PWC\BuilderTrait;
use PWC\Html\Heading;

class H1 extends Heading {
    protected $_level = 1;

    public function level(int $level = 1)
    {
        return $this;
    }

    use BuilderTrait;
}
