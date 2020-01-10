<?php

use Anomaly\TextFieldType\TextFieldType;
use Anomaly\TextFieldType\TextFieldTypeServiceProvider;

class TextFieldTypeServiceProviderTest extends TestCase
{

    public function testProvides()
    {
        $provider = app(TextFieldTypeServiceProvider::class, ['app' => app()]);

        $this->assertTrue(in_array(TextFieldType::class, $provider->provides()));
        $this->assertTrue(in_array('anomaly.field_type.text', $provider->provides()));
    }
}
