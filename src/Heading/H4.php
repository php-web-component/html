<?php namespace PWC\Component\Html\Heading;

class H4 extends \PWC\Component\Html\Heading
{
    protected $_level = 4;

    public function level(int $level = 4)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
