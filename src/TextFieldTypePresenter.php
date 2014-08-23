<?php namespace Streams\Addon\FieldType\Text;

use Streams\Core\Addon\Presenter\FieldTypePresenter;

class TextFieldTypePresenter extends FieldTypePresenter
{
    public function count()
    {
        return strlen($this->resource->value()) . ' = strlen("' . $this->resource->value() . '")';
    }
}
