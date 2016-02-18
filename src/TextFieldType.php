<?php namespace Anomaly\TextFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class TextFieldType
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\TextFieldType
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
    protected $config = [
        'type' => 'text'
    ];

    /**
     * Get the rules.
     *
     * @return array
     */
    public function getRules()
    {
        $rules = parent::getRules();

        if ($min = array_get($this->getConfig(), 'min')) {
            $rules[] = 'min:' . $min;
        }

        if ($max = array_get($this->getConfig(), 'max')) {
            $rules[] = 'max:' . $max;
        }

        if ($validate = array_get($this->getConfig(), 'validate')) {
            $rules[] = $validate;
        }

        return $rules;
    }
}
