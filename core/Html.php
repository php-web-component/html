<?php namespace PWC;

use PWC\Html\Head\Style\InlineStyle;

class Html extends Component {
    protected $_tag = 'html';
    protected $_selfClose = false;
    protected $_attributes = [];
    protected $_docType = '!DOCTYPE';

    public function render()
    {
        $docType = get_class($this) == Html::class ? "{$this->_docType} " : '';
        $attributes = $this->_renderAttributes();
        $attributes = empty(trim($attributes)) ? '' : ' ' . $attributes;

        if ($this->_selfClose) {
            return "<{$docType}{$this->_tag}{$attributes} />";
        } else {
            return "<{$docType}{$this->_tag}{$attributes}>" . parent::render() . "</{$this->_tag}>";
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
        }, array_keys($this->_attributes), $this->_attributes));
    }

    public function attributes(array $attributes = [], bool $override = false)
    {
        $this->_attributes = $override ? $attributes : array_merge_recursive($this->_attributes, $attributes);
        return $this;
    }

    public function id(string $id = null)
    {
        return $this->attributes(['id' => $id]);
    }

    public function class(...$classes)
    {
        $override = false;

        if (count($classes) == 1) {
            if (is_array($classes[0])) {
                $classes = $classes[0];
            }
        } elseif (count($classes) == 2) {
            if (is_bool($classes[1])) {
                $override = $classes[1];
                
                if (is_array($classes[0])) {
                    $classes = $classes[0];
                    $classes[] = $override;
                }
            }
        } elseif (count($classes) > 0) {
            if (is_bool($classes[count($classes) - 1])) {
                $override = $classes[count($classes) - 1];
            }
        }

        if ($override) {
            unset($this->_attributes['class']);
            unset($classes[count($classes) - 1]);
        }

        return $this->attributes(['class' => array_merge(
            $this->_attributes['class'] ?? [],
            $classes
        )]);
    }

    public function style(array $style = [], bool $override = false)
    {
        if ($override) {
            unset($this->_attributes['style']);
        }

        return $this->attributes(['style' => array_merge_recursive(
            $this->_attributes['style'] ?? [],
            $style
        )]);
    }

    use BuilderTrait, ComponentTrait;
}
