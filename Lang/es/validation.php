<?php

return array(

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

    "accepted"                  => "El campo de :attribute debe ser aceptado.",
    "active_url"                => "El campo de :attribute no es una URL válida.",
    "after"                     => "El campo de :attribute debe ser una fecha posterior a :date.",
    "alpha"                     => "El campo de :attribute solo puede contener letras.",
    "alpha_dash"                => "El campo de :attribute solo puede contener letras, números y guiones.",
    "alpha_num"                 => "El campo de :attribute solo puede contener letras y números.",
    "array"                     => "El campo de :attribute debe ser una matriz.",
    "before"                    => "El campo de :attribute debe ser una fecha anterior a :date.",
    "between"                   => array(
        "numeric" => "El campo de :attribute debe estar entre :min y :max.",
        "file"    => "El campo de :attribute debe tener entre :min y :max kilobytes.",
        "string"  => "El campo de :attribute debe tener entre :min y :max caracteres.",
        "array"   => "The :attribute must have between :min and :max items.",
    ),
    "boolean"                   => "El campo de :attribute debe ser verdadero o falso.",
    "confirmed"                 => "La confirmación de la :attribute no se corresponde.",
    "date"                      => "El campo de :attribute no es una fecha válida.",
    "date_format"               => "El campo de :attribute no se corresponde con el formato :format.",
    "different"                 => "El campo de :attribute y de :other tienen que ser diferentes.",
    "digits"                    => "El campo de :attribute debe tener :digits dígitos.",
    "digits_between"            => "El campo de :attribute debe tener entre :min y :max dígitos.",
    "email"                     => "El campo de :attribute debe ser una dirección de correo electrónico válida.",
    "exists"                    => "El/la :attribute seleccionado/a es inválido/a.",
    "image"                     => "EL campo de :attribute debe ser una imagen.",
    "in"                        => "El/la :attribute seleccionado/a es inválido/a.",
    "integer"                   => "El campo de :attribute debe ser un entero.",
    "ip"                        => "El campo de :attribute debe ser una dirección IP válida.",
    "max"                       => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ),
    "mimes"                     => "El campo de :attribute debe ser un archivo de tipo: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ),
    "not_in"                    => "El/la :attribute seleccionado/a es inválido/a.",
    "numeric"                   => "The :attribute must be a number.",
    "regex"                     => "El formato del campo de :attribute es inválido.",
    "required"                  => "El campo de :attribute es obligatorio.",
    "required_if"               => "El campo de :attribute es obligatorio cuando :other es :value.",
    "required_with"             => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_with_all"         => "El campo de :attribute es obligatorio cuando :values está presente.",
    "required_without"          => "El campo de :attribute es obligatorio cuando :values no está presente.",
    "required_without_all"      => "El campo de :attribute es obligatorio cuando ninguno de :values están presentes.",
    "same"                      => "El campo de :attribute y de :other deben corresponderse.",
    "size"                      => array(
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute must be :size kilobytes.",
        "string"  => "The :attribute must be :size characters.",
        "array"   => "The :attribute must contain :size items.",
    ),
    "unique"                    => "El/la :attribute ya se está utilizando.",
    "url"                       => "El formato del campo de :attribute es inválido..",
    "template_exists"           => "El/la :attribute seleccionado/a es inválido/a.",
    "is_valid_captcha"          => "El código captcha introducido es inválido o incorrecto. Por favor, inténtalo de nuevo.",
    "user_password_strength"    => "El campo de :attribute debe contener: :user_password_strength.",
    "operator_password_strength" => "El campo de :attribute debe contener: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "El logo debe apuntar a un archivo de imagen válida (una URL directa o una ruta de acceso al directorio base relativa al archivo).",

    /*
     * 2.2.0
     */
    "required_with_translation" => "La traducción en :translation para el campo de :attribute es obligatoria cuando :values está presente.",
    "max_translation"           => "La traduccón en :translation para el campo de :attribute no debe tener más de :max caracteres.",
    "unique_translation"        => "La traducción en :translation para el campo de :attribute ya se está usando.",

    /*
     * 2.3.0
     */
    "required_translation"      => "La traducción en :translation para el campo de :attribute es obligatoria.",
    "customfield_not_cyclic"    => "El campo no puede depender de uno de sus hijos.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "El campo de slug solo puede contener caracteres alfanuméricos, por lo que por favor, codifique los caracteres especiales con %.",
    "article_slug_unique"       => "El slug ya se está usando.",
    "captcha_required"          => "Se requiere el captcha.",
    "ticket_number_format"      => "El formato del número del ticket es inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "El campo de :attribute debe ser una fecha posterior o igual a :date.",
    "before_or_equal"           => "El campo de :attribute debe ser una fecha anterior o igual a :date.",
    "dimensions"                => "El campo de :attribute tiene dimensiones de imagen inválidas.",
    "distinct"                  => "El campo de :attribute tiene un valor duplicado.",
    "file"                      => "The :attribute must be a file.",
    "filled"                    => "El campo de :attribute debe tener un valor.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "El campo de :attribute no existe en :other.",
    "ipv4"                      => "El campo de :attribute debe ser una dirección IPv4 válida.",
    "ipv6"                      => "El campo de :attribute debe ser una dirección IPv6 válida.",
    "json"                      => "El campo de :attribute debe ser una cadena JSON válida.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "El/la :attribute debe ser un archivo de tipo: :values.",
    "not_regex"                 => "El formato del campo de :attribute es inválido.",
    "present"                   => "El campo de :attribute debe estar presente.",
    "required_unless"           => "El campo de :attribute es obligatorio a no ser que :other esté en :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "El campo de :attribute debe ser una zona válida.",
    "uploaded"                  => "Hubo un error al intentar subir :attribute.",

    /*
     * 2.5.0
     */
    "domain"                    => "Uno o más de los nombres de los dominios no son válidos.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "El formato del campo de :attribute es inválido. Por favor, utiliza el botón de 'Previsualizar' para los detalles de error.",

    /*
     * 3.0.0
     */
    "embed_image"               => "El/la :attribute debe ser un archivo de tipo: jpeg, png, or gif.",
    "starts_with"               => "El/la :attribute debe comenzar con uno/a de los/las siguientes: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "El número de teléfono proporcionado no es válido.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "El/la :attribute es inválido/a.",

    /*
     * 5.0.0
     */
    "current_password"           => "La contraseña es incorrecta.",
    "department_email_per_brand" => "Debe existir una cuenta de correo electrónico para cada marca asignada a este departamento..",
    "department_has_a_priority"  => "El/los departamento(s) :departments es/son público(s) y debe(n) asignarse al menos a una prioridad.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "The selected role is invalid.",
        ),
        "category.*.type" => array(
            "required" => "One or more self-service types must be selected.",
        ),
        "category.*.categories" => array(
            "required" => "One or more categories are required when a self-service type has been selected.",
            "exists"   => "One or more of the selected categories is invalid.",
        ),
        "brand.*" => array(
            "exists" => "The selected brand is invalid.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
