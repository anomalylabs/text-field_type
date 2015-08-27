<?php namespace Anomaly\TextFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class TextFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TextFieldType
 */
class TextFieldType extends FieldType
{

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

        return $rules;
    }
}
