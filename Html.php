<?php namespace PWC;

use PWC\Html\Head\Style\InlineStyle;

class Html extends Component {
    protected $tag = 'html';
    protected $selfClose = false;

    protected $attributes = [];

    protected $docType = '!DOCTYPE';

    public function render()
    {
        $docType = get_class($this) == Html::class ? "{$this->docType} " : '';

        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->selfClose) {
            return "<{$docType}{$this->tag}{$attributes} />";
        } else {
            return "<{$docType}{$this->tag}{$attributes}>" . parent::render() . "</{$this->tag}>";
        }
    }

    protected function _renderAttributes()
    {
        return implode(' ', array_map(function($name, $value) {
            if ($name == 'style') {
                $value = InlineStyle::build($value);
            } elseif (is_array($value)) {
                $value = implode(' ', $value);
            }

            return $name . '="' . $value . '"';
        }, array_keys($this->attributes), $this->attributes));
    }

    public function attributes(array $attributes = [])
    {
        $this->attributes = array_merge_recursive($this->attributes, $attributes);
        return $this;
    }

    public function id(string $id = null)
    {
        return $this->attributes(['id' => $id]);
    }

    public function class(...$classes)
    {
        return $this->attributes(['class' => array_merge(
            $this->attributes['class'] ?? [],
            $classes
        )]);
    }

    public function style(array $style = [])
    {
        return $this->attributes(['style' => array_merge_recursive(
            $this->attributes['style'] ?? [],
            $style
        )]);
    }

    use ComponentTrait;
}
