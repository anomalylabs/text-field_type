<v-input>
    <v-text-field
    {!! html_attributes([
        'value' => $fieldType->getValue(),
        'label' => $fieldType->getLabel(),
        'name'  => $fieldType->getInputName(),
        'hint'  =>  $fieldType->getInstructions(),
        
        'readonly' => $fieldType->isReadonly() ? true : false,
        'disabled' => $fieldType->isDisabled() ? true : false,
    
        // 'data-field'      => $fieldType->getField(),
        // 'data-provides'   => $fieldType->getNamespace(),
        // 'data-field_name' => $fieldType->getFieldName(),
    
        // 'class' => $fieldType->getClass(),
        // 'id'    => $fieldType->getInputName(),
    ]) !!}
    
    outlined
    clearable
    ></v-text-field>
</v-input>
