<?php namespace PWC\Component\Html\Head;

use PWC\Singleton\Config as SingletonConfig;

class Config extends SingletonConfig
{
    protected $meta = [];
    protected $style = [];
    protected $script = [];
}
