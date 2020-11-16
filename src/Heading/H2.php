<?php namespace PWC\Component\Html\Heading;

class H2 extends \PWC\Component\Html\Heading
{
    protected $_level = 2;

    public function level(int $level = 2)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
