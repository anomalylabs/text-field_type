{{--{% if field_type.config.mask %}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/dependencyLibs/inputmask.dependencyLib.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/inputmask.js") }}--}}

{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/bindings/inputmask.binding.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/inputmask.extensions.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/inputmask.numeric.extensions.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/inputmask.date.extensions.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/inputmask.phone.extensions.js") }}--}}
{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/inputmask/phone-codes/phone.js") }}--}}
{{--{% endif %}--}}

{{--{{ asset_add("scripts.js", "anomaly.field_type.text::js/input.js") }}--}}

<input {!! html_attributes($fieldType->attributes([
    'data-max' => $fieldType->config('max'),
    'data-mask' => $fieldType->config('mask'),
    'data-alias' => $fieldType->config('alias'),
    'data-regex' => $fieldType->config('regex'),
    'type' => $fieldType->config('type') ?: 'text',
])) !!}>

{{--{% if field_type.config.show_counter %}--}}
{{--<small class="counter text-muted">--}}
{{--{% if field_type.config.max %}--}}
{{--<span class="count"></span> {{ trans('anomaly.field_type.text::input.characters_remaining') }}--}}
{{--{% else %}--}}
{{--{{ trans('anomaly.field_type.text::input.character_length') }}: <span class="count"></span>--}}
{{--{% endif %}--}}
{{--</small>--}}
{{--{% endif %}--}}
