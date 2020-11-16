<?php namespace PWC\Component\Html\Heading;

class H1 extends \PWC\Component\Html\Heading
{
    protected $_level = 1;

    public function level(int $level = 1)
    {
        return $this;
    }

    use \PWC\BuilderTrait;
}
