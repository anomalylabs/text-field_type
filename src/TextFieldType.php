<?php namespace Anomaly\Streams\Addon\FieldType\Text;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class TextFieldType extends FieldTypeAddon
{
    protected $slug = 'text';

    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';
}
