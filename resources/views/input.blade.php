{{ assets()->add('scripts.js', 'public::vendor/anomaly/field_type/text/js/input.js') }}

<input {!! html_attributes($fieldType->attributes()) !!}>
