<?php declare(strict_types=1);

return array(

    /*
     * 5.0.0
     */
    "app_id"                           => "ID de la aplicación",
    "app_secret"                       => "Secreto de la aplicación",
    "api_key"                          => "Clave de API",

    "algolia_documentation"            => "Lee nuestra documentación para configurar <a href=':link'>Algolia</a>.",

    "facebook_documentation"           => "Lee nuestra documentación para configurar <a href=':link'>Facebook</a>.",
    "facebook_redirect_url"            => "La siguiente URL <strong>debe</strong> introducirse para el inicio de sesión de Facebook 'URI de redireccionamiento de OAuth válidos':",

    "google_documentation"             => "Lee nuestra documentación para configurar <a href=':link'>Google</a>.",
    "google_redirect_url"              => "La(s) siguiente(s) URL(s) <strong>debe(n)</strong> introducirse para Google 'URI de redireccionamiento autorizados:",

    "microsoft_documentation"          => "Lee nuestra documentación para configurar <a href=':link'>Microsoft</a>.",
    "microsoft_redirect_url"           => "La(s) siguiente(s) URL(s) <strong>debe(n)</strong> introducirse para la aplicación 'URI de redirección':",

    "pusher_hosting"                   => "Hosting",
    "pusher_cloud"                     => "Cloud (pusher.com)",
    "pusher_self_hosted"               => "Self-Hosted",
    "pusher_key"                       => "Clave",
    "pusher_secret"                    => "Secreto",
    "pusher_cluster"                   => "Clúster",
    "pusher_internal_host"             => "Host interno",
    "pusher_internal_host_desc"        => "El nombre del host interno o la dirección IP del servidor del web socket.",
    "pusher_internal_port_desc"        => "El puerto del servidor interno del web socket.",
    "pusher_external_host"             => "Host externo",
    "pusher_external_host_desc"        => "El nombre del host o la dirección IP del servidor del web socket al que pueden acceder los miembros públicos. Déjalo en blanco para utilizar el nombre del host de tu Help Desk.",
    "pusher_external_port_desc"        => "El puerto del servidor público del web socket. Déjalo en blanco para utilizar el mismo puerto que tu servidor webr",
    "pusher_encryption_desc"           => "Activar si has configurado un certificado SSL en el servidor del web socket.",
    "pusher_unable_to_receive_updates" => "No se han podido recibir actualizaciones en tiempo real. Comprueba tu conexión a internet.",

    "steam_documentation"              => "Lee nuestra documentación para configurar <a href=':link'>Steam</a>.",

    "twilio_account_details"           => "Detalles de la cuenta",
    "twilio_account_details_desc"      => "El SID de la cuenta y el token de autenticación están disponibles en la consola de su cuenta, en 'Información de la cuenta'.",
    "twilio_account_sid"               => "SID de la cuenta",
    "twilio_auth_token"                => "Token de autenticación",
    "twilio_api_details"               => "Detalles de API",
    "twilio_api_details_desc"          => "Busca 'Claves API' en la consola. Crea una clave API, e introduce la clave y el secreto a continuación.",
    "twilio_api_secret"                => "Secreto de API",
    "twilio_number_verification"       => "Verificación del número",

    "twitter_api_key_secret"           => "Secreto de la clave API",

    /*
     * 5.3.0
     */
    "twitter_documentation"            => "Lee nuestra documentación para configurar <a href=':link'>Twitter</a>.",
    "twitter_redirect_url"             => "La siguiente URL <strong>debe</strong> introducirse para la aplicación de Twitter 'Callback URL':",

    /*
     * 5.4.1
     */
    "twilio_verify_sid"                => "Verificación SID",
    "twilio_number_verification_desc"  => "Opcional: introduzca un SID de servicio de verificación para permitir la verificación de los números de teléfono de los usuarios. Esto se recomienda para evitar que los usuarios introduzcan cualquier número de teléfono - El servicio de <a target='_blank' href='https://www.twilio.com/verify'>verificación</a> de Twilio es de pago.",
    "twilio_verify_countries"          => "Verificar países permitidos",
    "twilio_verify_countries_desc"     => "Restringe la verificación de números de teléfono a países específicos para reducir costos y el riesgo de uso indebido. Los números de teléfono pertenecientes a países fuera de la lista permitida pueden marcarse manualmente como verificados por el personal.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Límite de búsqueda en frontend",
    "algolia_max_daily"                => "Máximo diario de solicitudes",
    "algolia_max_daily_desc"           => "Número máximo de llamadas a la API que se pueden realizar a Algolia desde el frontend por día.",
    "algolia_max_min"                  => "Máximo de solicitudes por minuto",
    "algolia_max_min_desc"             => "Número máximo de llamadas a la API que se pueden realizar a Algolia desde el frontend, por usuario autenticado o dirección IP.",

    /*
     * 5.7.0
     */
    "microsoft_tenant_id"               => "ID de inquilino (Tenant ID)",
    "microsoft_tenant_id_desc"          => "Si se requiere el uso de un único inquilino para los tipos de cuenta compatibles, introduce el ID de inquilino (tenant ID); de lo contrario, deja este campo en blanco. Puedes encontrar el tenant ID en el Microsoft Entra Identity overview.",

);
