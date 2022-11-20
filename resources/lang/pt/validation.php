<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],










    'aceito' => 'O: atributo deve ser aceito.',
    'active_url' => 'O: attribute não é um URL válido.',
    'after' => 'O: attribute deve ser uma data após: date.',
    'after_or_equal' => 'O: attribute deve ser uma data posterior ou igual a: date.',
    'alpha' => 'O: attribute deve conter apenas letras.',
    'alpha_dash' => 'O: attribute deve conter apenas letras, números, travessões e sublinhados.',
    'alpha_num' => 'O: attribute deve conter apenas letras e números.',
    'array' => 'O: attribute deve ser um array.',
    'before' => 'O: attribute deve ser uma data antes de: date.',
    'before_or_equal' => 'O: attribute deve ser uma data anterior ou igual a: date.',
    'entre' => [
        'numeric' => 'O: attribute deve estar entre: min e: max.',
        'file' => 'O: attribute deve estar entre: min e: max kilobytes.',
        'string' => 'O: attribute deve ter entre: min e: max caracteres.',
        'array' => 'O: attribute deve ter entre: min e: max itens.',
    ],
    'boolean' => 'O campo: attribute deve ser verdadeiro ou falso.',
    'confirmado' => 'A: confirmação do atributo não corresponde.',
    'date' => 'O: attribute não é uma data válida.',
    'date_equals' => 'O: attribute deve ser uma data igual a: date.',
    'date_format' => 'O: attribute não corresponde ao formato: format.',
    'different' => 'O: attribute e: other devem ser diferentes.',
    'digits' => 'O: attribute deve ser: digits digits.',
    'digits_between' => 'O: attribute deve estar entre: min e: max dígitos.',
    'dimensões' => 'O: attribute tem dimensões de imagem inválidas.',
    'distinto' => 'O campo: attribute tem um valor duplicado.',
    'email' => 'O: attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O: attribute deve terminar com um dos seguintes:: values.',
    'existe' => 'O atributo selecionado é inválido.',
    'file' => 'O: attribute deve ser um arquivo.',
    'preenchido' => 'O campo: attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O: attribute deve ser maior que: value.',
        'file' => 'O: attribute deve ser maior que: value kilobytes.',
        'string' => 'O: attribute deve ser maior que: caracteres de valor.',
        'array' => 'O: attribute deve ter mais do que: itens de valor.',
    ],
    'gte' => [
        'numeric' => 'O: attribute deve ser maior ou igual a: value.',
        'file' => 'O: attribute deve ser maior ou igual: value kilobytes.',
        'string' => 'O: attribute deve ser maior ou igual a caracteres de valor.',
        'array' => 'O: attribute deve ter: itens de valor ou mais.',
    ],
    'image' => 'O: attribute deve ser uma imagem.',
    'in' => 'O atributo selecionado é inválido.',
    'in_array' => 'O campo: attribute não existe em: other.',
    'integer' => 'O: attribute deve ser um inteiro.',
    'ip' => 'O: attribute deve ser um endereço IP válido.',
    'ipv4' => 'O: attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O: attribute deve ser um endereço IPv6 válido.',
    'json' => 'O: attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O: attribute deve ser menor que: value.',
        'file' => 'O: attribute deve ser menor que: value kilobytes.',
        'string' => 'O: attribute deve ter menos que: caracteres de valor.',
        'array' => 'O: attribute deve ter menos que: itens de valor.',
    ],
    'lte' => [
        'numeric' => 'O: attribute deve ser menor ou igual a: value.',
        'file' => 'O: attribute deve ser menor ou igual: value kilobytes.',
        'string' => 'O: attribute deve ser menor ou igual a caracteres de valor.',
        'array' => 'O: attribute não deve ter mais do que: itens de valor.',
    ],
    'max' => [
        'numeric' => 'O: attribute não deve ser maior que: max.',
        'file' => 'O: attribute não deve ser maior que: max kilobytes.',
        'string' => 'O: attribute não deve ser maior que: max caracteres.',
        'array' => 'O: attribute não deve ter mais do que: max itens.',
    ],
    'mimes' => 'O: attribute deve ser um arquivo do tipo:: values.',
    'mimetypes' => 'O: attribute deve ser um arquivo do tipo:: values.',
    'min' => [
        'numeric' => 'O: attribute deve ser pelo menos: min.',
        'file' => 'O: attribute deve ter pelo menos: min kilobytes.',
        'string' => 'O: attribute deve ter pelo menos: min caracteres.',
        'array' => 'O: attribute deve ter pelo menos: itens min.',
    ],
    'multiple_of' => 'O: attribute m'

];
