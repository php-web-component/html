<?php namespace PWC\Component\Html\Heading;

class H5 extends \PWC\Component\Html\Heading
{
    protected $_level = 5;

    public function level(int $level = 5)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
