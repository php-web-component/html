<?php namespace PWC\Html\Heading;

use PWC\BuilderTrait;
use PWC\Html\Heading;

class H4 extends Heading {
    protected $_level = 4;

    public function level(int $level = 4)
    {
        return $this;
    }

    use BuilderTrait;
}
