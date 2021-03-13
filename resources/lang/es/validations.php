<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen varias versiones, como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': el atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: date.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': atributo sólo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'before' => ': atributo debe ser una fecha anterior a: date.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'archivo' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max elementos.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirm' => 'La confirmación de: atributo no coincide.',
    'date' => ': atributo no es una fecha válida.',
    'date_equals' => ': atributo debe ser una fecha igual a: date.',
    'date_format' => ': atributo no corresponde al formato: format.',
    'diferente' => ': atributo y: otros deben ser diferentes.',
    'digits' => ': atributo debe tener: digits dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no son válidas.',
    'distinto' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido.',
    'ends_with' => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores',
    'existe' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'fill' => 'El campo: atributo es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'image' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser una dirección IPv4 válida.',
    'ipv6' => ': atributo debe ser una dirección IPv6 válida.',
    'json' => 'El campo: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: caracteres máximos.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'multiple_of' => 'El campo: atributo debe ser múltiplo de: valor',
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'contraseña' => 'La contraseña es incorrecta.',
    'present' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: atributo es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo: atributo es obligatorio cuando: valores están presentes.',
    'required_without' => 'El campo: atributo es obligatorio cuando: valores no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.',
    'mismo' => ': atributo y: otros deben coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: size.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': atributo debe contener: tamaño de caracteres.',
        'array' => ': atributo debe contener: tamaño elementos.',
    ],
    'starts_with' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores',
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El campo: atributo ya ha sido registrado.',
    'uploaded' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: atributo es inválido.',
    'uuid' => 'El campo: atributo debe ser un UUID válido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributo
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'dirección' => 'dirección',
        'edad' => 'edad',
        'cuerpo' => 'contenido',
        'ciudad' => 'ciudad',
        'content' => 'contenido',
        'país' => 'país',
        'current_password' => 'contraseña actual',
        'fecha' => 'fecha',
        'día' => 'día',
        'description' => 'descripción',
        'email' => 'correo electrónico',
        'excerpt' => 'extracto',
        'first_name' => 'nombre',
        'gender' => 'género',
        'hora' => 'hora',
        'last_name' => 'apellido',
        'mensaje' => 'mensaje',
        'minuto' => 'minuto',
        'mobile' => 'móvil',
        'mes' => 'mes',
        'nombre' => 'nombre',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone' => 'teléfono',
        'precio' => 'precio',
        'role' => 'rol',
        'segundo' => 'segundo',
        'sex' => 'sexo',
        'asunto' => 'asunto',
        'terms' => 'términos',
        'tiempo' => 'hora',
        'título' => 'título',
        'username' => 'usuario',
        'año' => 'año',
    ],
];
<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen varias versiones, como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': el atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: date.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': atributo sólo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'before' => ': atributo debe ser una fecha anterior a: date.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'archivo' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max elementos.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirm' => 'La confirmación de: atributo no coincide.',
    'date' => ': atributo no es una fecha válida.',
    'date_equals' => ': atributo debe ser una fecha igual a: date.',
    'date_format' => ': atributo no corresponde al formato: format.',
    'diferente' => ': atributo y: otros deben ser diferentes.',
    'digits' => ': atributo debe tener: digits dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no son válidas.',
    'distinto' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido.',
    'ends_with' => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores',
    'existe' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'fill' => 'El campo: atributo es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'image' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser una dirección IPv4 válida.',
    'ipv6' => ': atributo debe ser una dirección IPv6 válida.',
    'json' => 'El campo: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: caracteres máximos.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'multiple_of' => 'El campo: atributo debe ser múltiplo de: valor',
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'contraseña' => 'La contraseña es incorrecta.',
    'present' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: atributo es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo: atributo es obligatorio cuando: valores están presentes.',
    'required_without' => 'El campo: atributo es obligatorio cuando: valores no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.',
    'mismo' => ': atributo y: otros deben coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: size.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': atributo debe contener: tamaño de caracteres.',
        'array' => ': atributo debe contener: tamaño elementos.',
    ],
    'starts_with' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores',
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El campo: atributo ya ha sido registrado.',
    'uploaded' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: atributo es inválido.',
    'uuid' => 'El campo: atributo debe ser un UUID válido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributo
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'dirección' => 'dirección',
        'edad' => 'edad',
        'cuerpo' => 'contenido',
        'ciudad' => 'ciudad',
        'content' => 'contenido',
        'país' => 'país',
        'current_password' => 'contraseña actual',
        'fecha' => 'fecha',
        'día' => 'día',
        'description' => 'descripción',
        'email' => 'correo electrónico',
        'excerpt' => 'extracto',
        'first_name' => 'nombre',
        'gender' => 'género',
        'hora' => 'hora',
        'last_name' => 'apellido',
        'mensaje' => 'mensaje',
        'minuto' => 'minuto',
        'mobile' => 'móvil',
        'mes' => 'mes',
        'nombre' => 'nombre',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone' => 'teléfono',
        'precio' => 'precio',
        'role' => 'rol',
        'segundo' => 'segundo',
        'sex' => 'sexo',
        'asunto' => 'asunto',
        'terms' => 'términos',
        'tiempo' => 'hora',
        'título' => 'título',
        'username' => 'usuario',
        'año' => 'año',
    ],
];
<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen varias versiones, como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': el atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: date.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': atributo sólo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'before' => ': atributo debe ser una fecha anterior a: date.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'archivo' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max elementos.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirm' => 'La confirmación de: atributo no coincide.',
    'date' => ': atributo no es una fecha válida.',
    'date_equals' => ': atributo debe ser una fecha igual a: date.',
    'date_format' => ': atributo no corresponde al formato: format.',
    'diferente' => ': atributo y: otros deben ser diferentes.',
    'digits' => ': atributo debe tener: digits dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no son válidas.',
    'distinto' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido.',
    'ends_with' => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores',
    'existe' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'fill' => 'El campo: atributo es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'image' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser una dirección IPv4 válida.',
    'ipv6' => ': atributo debe ser una dirección IPv6 válida.',
    'json' => 'El campo: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: caracteres máximos.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'multiple_of' => 'El campo: atributo debe ser múltiplo de: valor',
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'contraseña' => 'La contraseña es incorrecta.',
    'present' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: atributo es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo: atributo es obligatorio cuando: valores están presentes.',
    'required_without' => 'El campo: atributo es obligatorio cuando: valores no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.',
    'mismo' => ': atributo y: otros deben coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: size.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': atributo debe contener: tamaño de caracteres.',
        'array' => ': atributo debe contener: tamaño elementos.',
    ],
    'starts_with' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores',
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El campo: atributo ya ha sido registrado.',
    'uploaded' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: atributo es inválido.',
    'uuid' => 'El campo: atributo debe ser un UUID válido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributo
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'dirección' => 'dirección',
        'edad' => 'edad',
        'cuerpo' => 'contenido',
        'ciudad' => 'ciudad',
        'content' => 'contenido',
        'país' => 'país',
        'current_password' => 'contraseña actual',
        'fecha' => 'fecha',
        'día' => 'día',
        'description' => 'descripción',
        'email' => 'correo electrónico',
        'excerpt' => 'extracto',
        'first_name' => 'nombre',
        'gender' => 'género',
        'hora' => 'hora',
        'last_name' => 'apellido',
        'mensaje' => 'mensaje',
        'minuto' => 'minuto',
        'mobile' => 'móvil',
        'mes' => 'mes',
        'nombre' => 'nombre',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone' => 'teléfono',
        'precio' => 'precio',
        'role' => 'rol',
        'segundo' => 'segundo',
        'sex' => 'sexo',
        'asunto' => 'asunto',
        'terms' => 'términos',
        'tiempo' => 'hora',
        'título' => 'título',
        'username' => 'usuario',
        'año' => 'año',
    ],
];
<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen varias versiones, como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': el atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: date.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': atributo sólo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'before' => ': atributo debe ser una fecha anterior a: date.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'archivo' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max elementos.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirm' => 'La confirmación de: atributo no coincide.',
    'date' => ': atributo no es una fecha válida.',
    'date_equals' => ': atributo debe ser una fecha igual a: date.',
    'date_format' => ': atributo no corresponde al formato: format.',
    'diferente' => ': atributo y: otros deben ser diferentes.',
    'digits' => ': atributo debe tener: digits dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no son válidas.',
    'distinto' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido.',
    'ends_with' => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores',
    'existe' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'fill' => 'El campo: atributo es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'image' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser una dirección IPv4 válida.',
    'ipv6' => ': atributo debe ser una dirección IPv6 válida.',
    'json' => 'El campo: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: caracteres máximos.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'multiple_of' => 'El campo: atributo debe ser múltiplo de: valor',
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'contraseña' => 'La contraseña es incorrecta.',
    'present' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: atributo es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo: atributo es obligatorio cuando: valores están presentes.',
    'required_without' => 'El campo: atributo es obligatorio cuando: valores no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.',
    'mismo' => ': atributo y: otros deben coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: size.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': atributo debe contener: tamaño de caracteres.',
        'array' => ': atributo debe contener: tamaño elementos.',
    ],
    'starts_with' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores',
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El campo: atributo ya ha sido registrado.',
    'uploaded' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: atributo es inválido.',
    'uuid' => 'El campo: atributo debe ser un UUID válido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributo
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'dirección' => 'dirección',
        'edad' => 'edad',
        'cuerpo' => 'contenido',
        'ciudad' => 'ciudad',
        'content' => 'contenido',
        'país' => 'país',
        'current_password' => 'contraseña actual',
        'fecha' => 'fecha',
        'día' => 'día',
        'description' => 'descripción',
        'email' => 'correo electrónico',
        'excerpt' => 'extracto',
        'first_name' => 'nombre',
        'gender' => 'género',
        'hora' => 'hora',
        'last_name' => 'apellido',
        'mensaje' => 'mensaje',
        'minuto' => 'minuto',
        'mobile' => 'móvil',
        'mes' => 'mes',
        'nombre' => 'nombre',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone' => 'teléfono',
        'precio' => 'precio',
        'role' => 'rol',
        'segundo' => 'segundo',
        'sex' => 'sexo',
        'asunto' => 'asunto',
        'terms' => 'términos',
        'tiempo' => 'hora',
        'título' => 'título',
        'username' => 'usuario',
        'año' => 'año',
    ],
];
<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen varias versiones, como
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': el atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: date.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': atributo sólo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'before' => ': atributo debe ser una fecha anterior a: date.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'archivo' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max elementos.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirm' => 'La confirmación de: atributo no coincide.',
    'date' => ': atributo no es una fecha válida.',
    'date_equals' => ': atributo debe ser una fecha igual a: date.',
    'date_format' => ': atributo no corresponde al formato: format.',
    'diferente' => ': atributo y: otros deben ser diferentes.',
    'digits' => ': atributo debe tener: digits dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no son válidas.',
    'distinto' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido.',
    'ends_with' => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores',
    'existe' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'fill' => 'El campo: atributo es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'image' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser una dirección IPv4 válida.',
    'ipv6' => ': atributo debe ser una dirección IPv6 válida.',
    'json' => 'El campo: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: caracteres máximos.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'multiple_of' => 'El campo: atributo debe ser múltiplo de: valor',
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'contraseña' => 'La contraseña es incorrecta.',
    'present' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: atributo es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo: atributo es obligatorio cuando: valores están presentes.',
    'required_without' => 'El campo: atributo es obligatorio cuando: valores no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.',
    'mismo' => ': atributo y: otros deben coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: size.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': atributo debe contener: tamaño de caracteres.',
        'array' => ': atributo debe contener: tamaño elementos.',
    ],
    'starts_with' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores',
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El campo: atributo ya ha sido registrado.',
    'uploaded' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: atributo es inválido.',
    'uuid' => 'El campo: atributo debe ser un UUID válido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributo
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'dirección' => 'dirección',
        'edad' => 'edad',
        'cuerpo' => 'contenido',
        'ciudad' => 'ciudad',
        'content' => 'contenido',
        'país' => 'país',
        'current_password' => 'contraseña actual',
        'fecha' => 'fecha',
        'día' => 'día',
        'description' => 'descripción',
        'email' => 'correo electrónico',
        'excerpt' => 'extracto',
        'first_name' => 'nombre',
        'gender' => 'género',
        'hora' => 'hora',
        'last_name' => 'apellido',
        'mensaje' => 'mensaje',
        'minuto' => 'minuto',
        'mobile' => 'móvil',
        'mes' => 'mes',
        'nombre' => 'nombre',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone' => 'teléfono',
        'precio' => 'precio',
        'role' => 'rol',
        'segundo' => 'segundo',
        'sex' => 'sexo',
        'asunto' => 'asunto',
        'terms' => 'términos',
        'tiempo' => 'hora',
        'título' => 'título',
        'username' => 'usuario',
        'año' => 'año',
        'fullname' =>'nombre completo',
    ],
];
