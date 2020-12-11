<?php namespace PWC\Component\Html;

use PWC\Component\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Body\Config as BodyConfig;
use PWC\Component\Html\Head\Config as HeadConfig;

class Script extends Html
{
    protected $_ID = 'pwc-html-script';
    protected $_tag = null;
    protected $_selfClose = null;

    protected $_mode = null;

    public function __construct(array $scripts = [])
    {
        parent::__construct();

        $this->_children = $scripts;
    }

    public function render(): string
    {
        if ($this->_mode == 'internal') {
            return '<script type="text/javascript">' . implode('', array_map(function ($name, $script) {
                return $script . (substr($script, -1) == ';' ? '' : ';');
            }, array_keys($this->_children), $this->_children)) . '</script>';
        } elseif ($this->_mode == 'inline') {
            return '<!-- not ready yet --!>';
        } else {
            return implode('', array_map(function ($name, $script) {
                if (is_array($script)) {
                    $attributes = implode(' ', array_map(function ($scriptName, $scriptValue) {
                        return "{$scriptName}=\"{$scriptValue}\"";
                    }, array_keys($script), $script));
                    $attributes = empty(trim($attributes)) ? '' : " {$attributes}";
                    return "<script{$attributes}></script>";
                } else {
                    return "<script src=\"{$script}\" type=\"text/javascript\"></script>";
                }
            }, array_keys($this->_children), $this->_children));
        }
    }

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
