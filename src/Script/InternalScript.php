<?php namespace PWC\Component\Html\Script;

use PWC\BuilderTrait;
use PWC\Component\Html\Body\Config as BodyConfig;
use PWC\Component\Html\Head\Config as HeadConfig;
use PWC\Component\Html\Script;

class InternalScript extends Script
{
    protected $_ID = 'pwc-html-script-internal';
    protected $_mode = 'internal';

    public static function register($source, $position = 'body')
    {
        if ($position == 'body') {
            BodyConfig::add('script', self::build([
                $source
            ]), true);
        } else {
            HeadConfig::add('script', self::build([
                $source
            ]), true);
        }
    }

    use BuilderTrait;
}
