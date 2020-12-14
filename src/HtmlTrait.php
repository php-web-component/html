<?php namespace PWC\Component\Html;

use PWC\Component\Html\Style\InlineStyle;

trait HtmlTrait
{
    protected function renderAttributes()
    {
        return implode(' ', array_map(function($name, $value) {
            if ($name == 'style') {
                $value = InlineStyle::build($value);
            } elseif (is_array($value)) {
                $value = implode(' ', $value);
            }

            return $name . '="' . trim($value) . '"';
        }, array_keys($this->attributes->get()), $this->attributes->get()));
    }

    public function attributes(array $attributes = [], bool $override = false)
    {
        $this->attributes = $override ? $attributes : array_merge_recursive($this->attributes, $attributes);
        return $this;
    }

    public function id(string $id = null)
    {
        return $this->attributes(['id' => $id]);
    }

    public function title(string $title = null)
    {
        return $this->attributes(['title' => $title]);
    }

    public function role(string $role = null)
    {
        return $this->attributes(['role' => $role]);
    }

    public function alt(string $alt = null)
    {
        return $this->attributes(['alt' => $alt]);
    }

    public function data(string $name = null, $value = null)
    {
        return $this->attributes(["data-{$name}" => $value]);
    }

    public function aria(string $name = null, $value = null)
    {
        return $this->attributes(["aria-{$name}" => $value]);
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
            unset($this->attributes['class']);
            unset($classes[count($classes) - 1]);
        }

        return $this->attributes(['class' => array_merge(
            $this->attributes['class'] ?? [],
            $classes
        )]);
    }

    public function style(array $style = [], bool $override = false)
    {
        if ($override) {
            unset($this->attributes['style']);
        }

        return $this->attributes(['style' => array_merge_recursive(
            $this->attributes['style'] ?? [],
            $style
        )]);
    }
}
