<?php

use Anomaly\TextFieldType\TextFieldType;
use Anomaly\Streams\Platform\Entry\EntryModel;

class TextFieldTypeTest extends TestCase
{

    public function testRules()
    {
        $fieldType = $this->app->make(TextFieldType::class)
            ->mergeConfig([
                'min' => 5,
                'max' => 10,
            ]);

        $rules = $fieldType->getRules();

        $this->assertTrue(in_array('min:5', $rules));
        $this->assertTrue(in_array('max:10', $rules));
    }

    public function testAttributes()
    {
        $fieldType = $this->app->make(TextFieldType::class);

        $attributes = $fieldType->attributes();

        $this->assertTrue(array_get($attributes, 'type') === 'text');
        $this->assertTrue(array_get($attributes, 'value') == $fieldType->getValue());
        $this->assertTrue(array_get($attributes, 'data-max') == $fieldType->config('max'));
        $this->assertTrue(array_get($attributes, 'data-mask') == $fieldType->config('mask'));
        $this->assertTrue(array_get($attributes, 'data-alias') == $fieldType->config('alias'));
        $this->assertTrue(array_get($attributes, 'data-regex') == $fieldType->config('regex'));
        $this->assertTrue(array_get($attributes, 'type') == $fieldType->config('type') ?: 'text');
        $this->assertTrue(array_get($attributes, 'data-lpignore') == ($fieldType->config('type') == 'password' ? true : false));
        $this->assertTrue(array_get($attributes, 'autocomplete') == ($fieldType->config('type') == 'password' ? 'off' : false));
    }

    public function testGetColumnLength()
    {
        $fieldType = $this->app->make(TextFieldType::class);

        $this->assertTrue($fieldType->getColumnLength() === 255);

        $fieldType->mergeConfig([
            'max' => 10,
        ]);

        $this->assertTrue($fieldType->getColumnLength() === 10);
    }
}
