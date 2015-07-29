# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.text',
        'config' => [
            'type'          => 'text',
            'min'           => 10,
            'max'           => 100,
            'default_value' => 'Ryan Thompson'
        ]
    ]
];
```

### `type`

The type of text input to use. Valid options are `'text'` or `'password'`. The default value is `'text'`.

### `min`

The minimum input length allowed. By default no minimum is enforced.

### `max`

The maximum input length allowed. By default no maximum is enforced.

### `default_value`

The default input value. The default value is `null`.
