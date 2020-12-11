<?php namespace PWC\Component\Html\Input;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Input;

class LocalDateTime extends Input
{
    protected $_ID = 'pwc-html-input-localDateTime';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->type('datetime-local');
    }

    use BuilderTrait;
}
