<?php

namespace Anomaly\TextFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class TextFieldType
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TextFieldType extends FieldType
{

    /**
     * The field input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.text::input';

    /**
     * The config array.
     *
     * @var array
     */
    public $config = [
        'type' => 'text',
        'max'  => 255,
    ];

    /**
     * Return the rules.
     *
     * @param array $rules
     * @return array
     */
    public function rules(array $rules = [])
    {
        if ($min = $this->config('min')) {
            $rules[] = 'min:' . $min;
        }

        if ($max = $this->config('max')) {
            $rules[] = 'max:' . $max;
        }

        return parent::rules($rules);
    }

    /**
     * Get the column length.
     *
     * @return string
     */
    public function getColumnLength()
    {
        return $this->columnLength ?: $this->config('max');
    }

    /**
     * Return merged attributes.
     *
     * @param array $attributes
     */
    public function attributes(array $attributes = [])
    {
        return array_merge(parent::attributes(), [
            'data-max' => $this->config('max'),
            'data-mask' => $this->config('mask'),
            'data-alias' => $this->config('alias'),
            'data-regex' => $this->config('regex'),
            'data-lpignore' => $this->config('type') == 'password' ? true : false,
            'autocomplete' => $this->config('type') == 'password' ? 'off' : false,
            'type' => $this->config('type') ?: 'text',
            'value' => $this->getValue(),
        ], $attributes);
    }
}
