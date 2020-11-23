<?php namespace PWC\Component\Html;

use PWC\BuilderTrait;
use PWC\Component\Html;
use PWC\Component\Html\Head\Config;

class Meta extends Html
{
    protected $_ID = 'pwc-html-meta';
    protected $_tag = 'meta';
    protected $_selfClose = true;

    public function name($value = null)
    {
        return $this->attributes(['name' => $value]);
    }

    public function content($value = null)
    {
        return $this->attributes(['content' => $value]);
    }

    public function charset($value = null)
    {
        return $this->attributes(['charset' => $value]);
    }

    public function httpEquiv($value = null)
    {
        return $this->attributes(['http-equiv' => $value]);
    }

    public static function register(array $attributes = [])
    {
        $meta = Meta::build();
        foreach ($attributes as $name => $value) {
            $meta = $meta->$name($value);
        }

        Config::add('meta', $meta);
    }

    use BuilderTrait;
}
