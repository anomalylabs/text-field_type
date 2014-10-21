<?php namespace Anomaly\Streams\FieldType\Text;

use Streams\Core\Addon\FieldTypeAbstract;

class TextFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';
}
