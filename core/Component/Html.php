<?php namespace PWC\Component;

use PWC\Component;
use PWC\Component\Html\Attribute\Collection as AttributeCollection;
use PWC\Component\Html\DocType;
use PWC\Component\Html\SelfClose;
use PWC\Component\Html\Tag;

class Html extends Component
{
    use BuilderTrait;

    public ?DocType $_docType;
    public AttributeCollection $_attributes;

    protected Tag $_tag;
    protected SelfClose $_selfClose;

    protected function _init()
    {
        parent::_init();

        $this->_tag->set('html');
        $this->_selfClose->set(false);

        if (get_class($this) == Html::class && is_null($this->_docType)) {
            $this->_docType = DocType::build('html');
        }
    }

    protected function _renderAttributes()
    {
        $attributes = '';
        if (!is_null($this->_attributes->get())) {
            $attributes = implode(' ', array_map(function ($attr) {
                return "{$attr->name()}=\"{$attr->get()}\"";
            }, $this->_attributes->get()));

            if (!empty($attributes)) {
                $attributes = ' ' . $attributes;
            }
        }

        return $attributes;
    }

    public function render(): string
    {
        if (!is_null($this->_tag->get())) {
            $tag = $this->_tag->get();

            $docType = '';
            if (get_class($this) == Html::class) {
                if (is_null($this->_docType)) {
                    $docType = '<!DOCTYPE html>';
                } else {
                    if (!is_null($this->_docType->get())) {
                        $docType = "<!DOCTYPE {$this->_docType->get()}>";
                    } else {
                        $docType = '<!DOCTYPE html>';
                    }
                }
            }

            $attributes = $this->_renderAttributes();
            if ($this->_selfClose->get()) {
                return "{$docType}<{$tag}{$attributes} />";
            } else {
                return "{$docType}<{$tag}{$attributes}>" . parent::render() . "</{$tag}>";
            }
        } else {
            return '';
        }
    }
}
