<?php namespace PWC\Component\Html\Heading;

class H6 extends \PWC\Component\Html\Heading
{
    protected $_level = 6;

    public function level(int $level = 6)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
