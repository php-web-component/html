<?php namespace PWC\Html\Script;

use PWC\BuilderTrait;
use PWC\ComponentTrait;
use PWC\Html\Script;

class InternalScript extends Script {
    protected $_mode = 'internal';

    use BuilderTrait, ComponentTrait;
}
