<?php namespace PWC\Component\Html\Style;

use PWC\BuilderTrait;
use PWC\Component\Html\Head\Config;
use PWC\Component\Html\Style;

class InternalStyle extends Style
{
    protected $_ID = 'pwc-html-style-inline';
    protected $_mode = 'internal';

    public static function register($source)
    {
        Config::add('style', self::build([
            $source
        ]), true);
    }

    use BuilderTrait;
}
