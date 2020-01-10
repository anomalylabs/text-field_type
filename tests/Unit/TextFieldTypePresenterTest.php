<?php

use Anomaly\TextFieldType\TextFieldType;

class TextFieldTypePresenterTest extends TestCase
{

    public function testTel()
    {
        $fieldType = app(TextFieldType::class)
            ->setValue('(111) 222-3333');

        $tel = (string) decorate($fieldType)->tel('Foo Bar', ['data-foo' => 'bar']);

        $this->assertStringContainsString('Foo Bar', $tel);
        $this->assertStringContainsString('data-foo="bar"', $tel);
        $this->assertStringContainsString('href="tel:1112223333"', $tel);

        $tel = (string) decorate($fieldType)->tel();

        $this->assertStringContainsString('>(111) 222-3333</a>', $tel);

        $tel = decorate($fieldType->setValue(null))->tel();

        $this->assertTrue($tel === null);
    }

    public function testSms()
    {
        $fieldType = app(TextFieldType::class)
            ->setValue('(111) 222-3333');

        $sms = (string) decorate($fieldType)->sms('Foo Bar', ['data-foo' => 'bar']);

        $this->assertStringContainsString('Foo Bar', $sms);
        $this->assertStringContainsString('data-foo="bar"', $sms);
        $this->assertStringContainsString('href="sms:1112223333"', $sms);

        $sms = (string) decorate($fieldType)->sms();

        $this->assertStringContainsString('>(111) 222-3333</a>', $sms);

        $sms = decorate($fieldType->setValue(null))->sms();

        $this->assertTrue($sms === null);
    }
}
