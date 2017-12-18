<?php

return [
    'type'          => [
        'label'        => 'Input Type',
        'instructions' => 'Specify the input type to display.',
        'option'       => [
            'password' => 'Password',
            'tel'      => 'Telephone',
            'email'    => 'Email',
            'text'     => 'Text',
        ],
    ],
    'mask'          => [
        'label'        => 'Input Mask',
        'instructions' => 'Specify an <a href="https://github.com/RobinHerbots/Inputmask" target="_blank">input mask</a>.',
    ],
    'min'           => [
        'label'        => 'Minimum Length',
        'instructions' => 'Specify the minimum input length allowed.',
    ],
    'max'           => [
        'label'        => 'Maximum Length',
        'instructions' => 'Specify the maximum input length allowed.',
    ],
    'show_counter'  => [
        'label'        => 'Show Counter',
        'instructions' => 'Display the remaining characters while typing?',
    ],
    'suggested'     => [
        'label'        => 'Suggested Length',
        'instructions' => 'Specify the suggested input length.',
    ],
    'default_value' => [
        'label'        => 'Default Value',
        'instructions' => 'Specify the default value.',
    ],
];
