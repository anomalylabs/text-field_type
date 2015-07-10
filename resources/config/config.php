<?php

return [
    'type'          => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options' => [
                'text'     => 'anomaly.field_type.text::config.type.text',
                'password' => 'anomaly.field_type.text::config.type.password'
            ]
        ]
    ],
    'min'           => [
        'type' => 'anomaly.field_type.integer'
    ],
    'max'           => [
        'type' => 'anomaly.field_type.integer'
    ],
    'default_value' => [
        'type' => 'anomaly.field_type.text'
    ]
];
