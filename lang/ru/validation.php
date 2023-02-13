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

    'accepted' => 'Поле :attribute должно быть принято.',
    'accepted_if' => 'Поле :attribute должно быть принято когда :other равно :value.',
    'active_url' => 'Поле :attribute является не валидным URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha' => 'Поле :attribute должно содержать только буквы.',
    'alpha_dash' => 'Поле :attribute должно содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'Поле :attribute должно содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой до или равной :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => 'Поле :attribute должно быть между :min и :max килобайт.',
        'string' => 'Поле :attribute должно быть между :min и :max символов.',
        'array' => 'Поле :attribute должно быть между :min и :max элементов.',
    ],
    'boolean' => 'Поле :attribute может быть true либо false.',
    'confirmed' => 'Поле :attribute должно быть подтверждено.',
    'current_password' => 'Пароль неверный.',
    'date' => 'Поле :attribute не является датой.',
    'date_equals' => 'Поле :attribute может быть датой равной :date.',
    'date_format' => 'Поле :attribute должно иметь формат даты :format.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено когда :other равен :value.',
    'different' => 'Поле :attribute и :other должны быть разными.',
    'digits' => 'Поле :attribute должно иметь :digits разрядов.',
    'digits_between' => 'Поле :attribute должно иметь минимум :min и максимум :max разрядов.',
    'dimensions' => 'Поле :attribute имеет недопустимое разрешение изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute имеет неверный формат email адреса.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений :values.',
    'enum' => 'Выбранный :attribute неверный.',
    'exists' => 'Выбранный :attribute неверный.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно быть заполнено.',
    'gt' => [
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'file' => 'Поле :attribute должно быть больше чем :value килобайт.',
        'string' => 'Поле :attribute должно иметь больше чем :value символов.',
        'array' => 'Поле :attribute должно иметь больше чем :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть больше или равным :value.',
        'file' => 'Поле :attribute должно быть больше или равным :value килобайт.',
        'string' => 'Поле :attribute должно иметь кол-во символов больше или равным :value.',
        'array' => 'Поле :attribute должно иметь :value элементов или больше.',
    ],
    'image' => 'Поле :attribute должно быть картинкой.',
    'in' => 'Выбранный :attribute неверный.',
    'in_array' => 'Поле :attribute не содержится в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно иметь правильный формат IP адреса.',
    'ipv4' => 'Поле :attribute должно иметь правильный формат IPv4 адреса.',
    'ipv6' => 'Поле :attribute должно иметь правильный формат IPv6 адреса.',
    'mac_address' => 'Поле :attribute должно иметь правильный формат MAC адреса.',
    'json' => 'Поле :attribute должен иметь формат JSON',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file' => 'Поле :attribute должно быть меньше чем :value килобайт.',
        'string' => 'Поле :attribute должно иметь меньше чем :value символов.',
        'array' => 'Поле :attribute должно иметь меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равным :value.',
        'file' => 'Поле :attribute должно быть меньше или равным :value килобайт.',
        'string' => 'Поле :attribute должно иметь меньше или равным :value символов.',
        'array' => 'Поле :attribute должно иметь меньше :value элементов.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не должно быть больше чем :max.',
        'file' => 'Поле :attribute не должно быть больше чем :max килобайт.',
        'string' => 'Поле :attribute не должно иметь больше чем :max символов.',
        'array' => 'Поле :attribute не должно иметь больше чем :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно иметь тип файла: :values.',
    'mimetypes' => 'Поле :attribute должно иметь тип файла: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file' => 'Поле :attribute должно быть не менее :min килобайт.',
        'string' => 'Поле :attribute должно иметь не менее :min символов.',
        'array' => 'Поле :attribute должно иметь не менее :min элементов.',
    ],
    'multiple_of' => 'Поле :attribute должно быть кратным :value.',
    'not_in' => 'Выбранный :attribute не верный.',
    'not_regex' => 'Поле :attribute имеет неправильный формат.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => 'Пароль неверный.',
    'present' => 'Поле :attribute должно присутствовать.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено когда :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, когда :other находится в :values.',
    'prohibits' => 'Поле :attribute запрещает :other присутствовать.',
    'regex' => 'Поле :attribute имеет неправильный формат.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => 'Поле :attribute является обязательным когда :other равно :value.',
    'required_unless' => 'Поле :attribute является обязательным когда :other находится в :values.',
    'required_with' => 'Поле :attribute является обязательным когда :values присутствуют.',
    'required_with_all' => 'Поле :attribute является обязательным когда все :values присутствуют.',
    'required_without' => 'Поле :attribute является обязательным когда :values отсутствуют.',
    'required_without_all' => 'Поле :attribute является обязательным когда все :values отсутствуют.',
    'same' => 'Поле :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file' => 'Поле :attribute должно быть :size килобайт.',
        'string' => 'Поле :attribute должно быть :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться одним из следующих значений: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть правильным часовым поясом.',
    'unique' => 'Поле :attribute должно быть уникальным.',
    'uploaded' => 'Поле :attribute не удалось загрузить.',
    'url' => 'Поле :attribute должно быть правильным URL.',
    'uuid' => 'Поле :attribute должно быть правильным UUID.',

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

];
