<?php namespace PWC\Component\Html\Heading;

class H3 extends \PWC\Component\Html\Heading
{
    protected $_level = 3;

    public function level(int $level = 3)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
