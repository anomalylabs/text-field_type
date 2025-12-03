# Text Field Type

*anomaly.field_type.text*

#### A simple text input field type.

The text field type provides a basic HTML input with configurable type and placeholder attributes.

## Features

- Configurable HTML5 input types (text, password, search, tel, etc.)
- Min and max length validation
- Placeholder text support
- Custom validation patterns
- Automatic length constraints
- Database column optimization

## Configuration

### Basic Configuration

```php
protected $fields = [
    'name' => [
        'type' => 'anomaly.field_type.text'
    ]
];
```

### With Max Length

```php
'title' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'max' => 100
    ]
]
```

### With Min/Max Length

```php
'username' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'min' => 3,
        'max' => 20
    ]
]
```

### With Placeholder

```php
'search' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'placeholder' => 'Search...'
    ]
]
```

### With Input Type

```php
'phone' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'type' => 'tel'
    ]
]
```

### With Pattern Validation

```php
'code' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'validate' => 'regex:/^[A-Z0-9]{6}$/'
    ]
]
```

## Usage Examples

### Basic Text Input

```php
$stream->create([
    'name' => 'John Doe'
]);
```

### Search Input

```php
'search' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'type'        => 'search',
        'placeholder' => 'Search products...'
    ]
]
```

### Password Input

```php
'password' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'type' => 'password',
        'min'  => 8
    ]
]
```

## Accessing Values

### In Twig Templates

```twig
{# Display text value #}
{{ entry.name }}

{# Check if value exists #}
{% if entry.title %}
    <h1>{{ entry.title }}</h1>
{% endif %}

{# Display with escaping #}
{{ entry.description|e }}
```

### In PHP

```php
$entry = $model->find(1);

// Get text value
$name = $entry->name;

// Check if value exists
if ($entry->title) {
    echo $entry->title;
}
```

## Setting Values

### In Forms

```php
$form = $builder->make('example.module.test');
$form->on('saving', function(FormBuilder $builder) {
    $entry = $builder->getFormEntry();
    $entry->name = 'New Name';
});
```

### Direct Assignment

```php
$entry->name = 'John Doe';
$entry->save();
```

## Database Structure

The text field type stores data as:
- **VARCHAR(255)** - Default max length
- **VARCHAR(X)** - Custom length based on `max` config

## Validation

### Required Text

```php
'name' => [
    'type'  => 'anomaly.field_type.text',
    'rules' => [
        'required'
    ]
]
```

### Min/Max Length

```php
'username' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'min' => 3,
        'max' => 20
    ],
    'rules' => [
        'required',
        'unique:users,username'
    ]
]
```

### Alphanumeric Only

```php
'code' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'validate' => 'alpha_num'
    ]
]
```

### Pattern Validation

```php
'postal_code' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'validate' => 'regex:/^[0-9]{5}$/'
    ]
]
```

## Common Use Cases

### Name/Title Fields

```php
'title' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'max' => 100
    ],
    'rules' => [
        'required'
    ]
]
```

### Username Field

```php
'username' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'min'      => 3,
        'max'      => 20,
        'validate' => 'alpha_dash'
    ],
    'rules' => [
        'required',
        'unique:users,username'
    ]
]
```

### Search Box

```php
'search' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'type'        => 'search',
        'placeholder' => 'Search...'
    ]
]
```

### Product SKU

```php
'sku' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'max'      => 50,
        'validate' => 'alpha_num'
    ],
    'rules' => [
        'required',
        'unique:products,sku'
    ]
]
```

### Phone Number

```php
'phone' => [
    'type'   => 'anomaly.field_type.text',
    'config' => [
        'type'     => 'tel',
        'validate' => 'regex:/^[0-9\-\+\(\) ]+$/'
    ]
]
```

## Best Practices

1. **Set Appropriate Max Length**: Match database column size to content needs
2. **Use HTML5 Input Types**: Leverage types like `tel`, `search`, `url` for better UX
3. **Validate Input**: Use Laravel validation rules for data integrity
4. **Provide Placeholders**: Guide users with example text
5. **Consider Security**: Sanitize and validate user input
6. **Index Fields**: Add database indexes for searchable text fields
7. **Consistent Naming**: Use clear, descriptive field names

## Requirements

- Streams Platform ^1.10
- PyroCMS 3.10+

## License

The Text Field Type is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Authors

PyroCMS, Inc. - [https://pyrocms.com](https://pyrocms.com)
Ryan Thompson - [ryan@pyrocms.com](mailto:ryan@pyrocms.com)
