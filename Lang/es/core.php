<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Panel del operador",
    "welcome"                   => "Bienvenido a SupportPal",
    "welcome_desc"              => "¡Has tomado la mejor decisión! Pulsa comenzar para disfrutar de un recorrido a través de las prestaciones y características de nuestro producto.",

    // Dashboard
    "submit_ticket"             => "Enviar ticket",
    "submit_ticket_desc"        => "Utiliza este formulario para enviar un ticket a nuestra plantilla de operadores especializados.",
    "track_ticket"              => "Comprobar el estado del ticket",
    "track_ticket_desc"         => "¿No estás registrado? Utiliza tu dirección de correo electrónico y el número del ticket para comprobar su estado",
    "my_tickets"                => "Mis tickets",
    "my_tickets_desc"           => "Comprueba tus tickets. Aquí puedes encontrar tickets tanto activos como previamente enviados.",
    "no_modules"                => "No hay secciones habilitadas",
    "search_results"            => "Resultados de la búsqueda",
    "found_results"             => "Encontrado(s) :total resultado(s) para el término de búsqueda",

    // Maintenance
    "maintenance"               => "Ahora mismo estamos trabajando en el mantenimiento de la página",
    "maintenance_desc"          => "Nuestro Help Desk no se encuentra disponible en este momento debido a que estamos realizando tareas de mantenimiento. Te agradecemos tu paciencia mientras las llevamos a cabo. ¡Volveremos enseguida!.",
    "maintenance_active"        => "El modo de mantenimiento se encuentra activo",

    // About
    "license_status"            => "Estado de la licencia",
    "license_code"              => "Código de la licencia",
    "change_license"            => "Cambiar licencia",
    "license_info"              => "Información sobre la licencia",
    "license_owner"             => "Propietario de la licencia",
    "license_created"           => "Licencia creada",
    "license_type"              => "Tipo de licencia",
    "branding"                  => "Mostrar marca",
    "license_expires"           => "La licencia expira",
    "license_valid_ip"          => "IP(s) válidas de la licencia",
    "support_status"            => "Estado de la asistencia",
    "support_expires"           => "La asistencia expira",
    "version_info"              => "Información sobre esta versión",
    "installed_version"         => "Versión instalada",
    "available_version"         => "Versión disponible",
    "monthly_product"           => "Tu fecha de expiración se ajustará automáticamente al mes una vez que se hayan pagado las facturas.",

    // API Tokens
    "api_token"                 => "API Token|API Tokens",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerar token",
    "access_level"              => "Nivel de acceso",
    "read_write"                => "Lectura y escritura",
    "read_only"                 => "Solo lectura",

    // Spam Rules & Filtering
    "spam_rule"                 => "Regla de spam|Reglas de spam",
    "containing_text"           => "Que contenga el texto",
    "filter_new_message"        => "Nuevo mensaje del ticket (del usuario)",
    "filter_new_comment"        => "Nuevo comentario de auto-servicio (del usuario)",
    "filter_user_login"         => "Acceso del usuario",
    "filter_operator_login"     => "Acceso del operador",
    "filter_api_access"         => "Acceso API",
    "content"                   => "Contenido",
    "sender"                    => "Remitente",
    "content_sender"            => "Contenido y remitente",

    // Company
    "company"                   => "Compañía|Compañías",

    // Email
    "default_email_addr"        => "Dirección de correo por defecto",
    "default_email_addr_desc"   => "El correo electrónico que se utilizará en el campo del remitente en la mayoría de los correos enviados por el sistema.",
    "include_operator_name"     => "Incluir nombre del operador",
    "include_operator_name_desc" => "Incluir el nombre de los operadores en el campo 'De' del correo para correos de respuesta al ticket. Por ejemplo: De: Joe Bloggs (Nombre de la compañía + nombre del departamento)",
    "include_dept_name"         => "Incluir nombre del departamento",
    "include_dept_name_desc"    => "Incluir el nombre del departamento en el campo 'De' de cualquier correo relacionado con el ticket. Ten en cuenta que esto normalmente creará un nuevo hilo de correos si un determinado ticket cambia de departamento.",
    "global_email_header"       => "Cabecera del correo electrónico",
    "global_email_header_desc"  => "Añadir una cabecera a todos los correos electrónicos enviados por el sistema. Se acepta HTML.",
    "global_email_footer"       => "Pie de página",
    "global_email_footer_desc"  => "Añadir un pie de página a todos los correos electrónicos enviados por el sistema. Se acepta HTML.",
    "email_template"            => "Plantilla de correo|Plantillas de correo",
    "email_log"                 => "Registro de correos",
    "email_queue"               => "Cola de correos",
    "email_queue_desc"          => "Más abajo se encuentran los correos en cola para ser enviados pronto por el Cron.",
    "email_method"              => "Método de correo electrónico",
    "php_mail_function"         => "Función PHP mail()",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "Host SMTP",
    "smtp_port"                 => "Puerto SMTP",
    "smtp_encryption"           => "Cifrado SMTP",
    "smtp_requires_auth"        => "Requiere autenticación",
    "smtp_username"             => "Nombre de usuario SMTP",
    "smtp_password"             => "Contraseña SMTP",
    "ssl"                       => "SSL",
    "email_content"             => "Contenido del correo",
    "email_content_desc"        => "Insertar un asunto y contenido del correo por defecto para esta plantilla. También puedes escribir la plantilla en otras lenguas. Si una plantilla no está establecida en otra lengua, se utilizará la información por defecto.",
    "outgoing"                  => "Enviados",
    "incoming"                  => "Recibidos",
    "incoming_spam"             => "Recibidos (Rechazados - Spam)",
    "incoming_throttled"        => "Recibidos (Rechazados - Limitados)",
    "email_subject"             => "Asunto del correo",
    "twig_html_warning"         => "No se permite Twig dentro de etiquetas o atributos HTML y será automáticamente eliminado al guardar.",

    // Modules
    "modules"                   => "Sección|Secciones",
    "modules_desc"              => "Más abajo se encuentra una lista con todas las secciones disponibles. Haz click en el icono de editar para actualizar los ajustes de esa sección.",
    "module_disable"            => "Las secciones desactivadas se elimarán del front-end y la interfaz del operador.",

    // Scheduled tasks
    "scheduled_task"            => "Tarea programada|Tareas programadas",
    "interval_desc"             => "Establecer la frecuencia con la que se ejecuta esta tarea, por ejemplo, al establecer 5 minutos significará que la tarea se ejecutará cada 5 minutos si el Cron está activo y funcionando.",
    "cron_settings"             => "Ajustes del Cron",
    "cron_running"              => "Ejecutándose",
    "cron_not_running"          => "No ejecutándose",
    "task_ran"                  => "Tarea programada ejecutada con éxito manualmente.",
    "task_failed"               => "Error al intentar ejecutar la tarea programada manualmente.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "visit_plugin"              => "Visitar Plugin Site",

    // Messages
    "last_activity"             => "Actividad reciente",
    "send_to"                   => "Enviar a",
    "inbox"                     => "Buzón de entrada",
    "compose"                   => "Redactar",

    // Utilities
    "utilities"                 => "Utilidades",

    // System Cleanup
    "system_cleanup"            => "Limpieza del sistema",
    "system_cleanup_desc"       => "Utiliza las opciones disponibles para eliminar información que ya no sirva o sea necesaria.",
    "files"                     => "Archivos",
    "files_desc"                => "Los siguientes elementos están almacenados como archivos en el sistema de archivos.",
    "logs"                      => "Registros",
    "logs_desc"                 => "Los siguientes elementos están registrados en la base de datos.",
    "empty"                     => "Vaciar",
    "prune"                     => "Eliminar",
    "total_records"             => "Total de registros",
    "system_cache"              => "Caché del sistema",
    "system_cache_desc"         => "Utilizada para almacenar información del sistema que no cambia con regularidad para acelerar la aplicación.",
    "template_cache"            => "Plantilla de Caché",
    "template_cache_desc"       => "Las versiones precompiladas de las vistas de plantillas están almacenadas para mejorar los tiempos de carga.",
    "attachments_desc"          => "Los archivos adjuntos de los tickets están almacenados en el sistema de archivos pero pueden ocupar espacio. Puedes eliminar archivos adjuntos antes de una fecha determinada.",
    "system_activity_log_desc"  => "Almacena toda actvidad de usuarios, operadores y del propio sistema. Puedes eliminar registros antes de una fecha determinada.",
    "email_log_desc"            => "Almacena todos los correos recibidos y enviados. Puedes eliminar registros antes de una fecha determinada.",
    "operator_login_log_desc"   => "Almacena cada vez que un operador inicia sesión con su IP. Puedes eliminar registros antes de una fecha determinada.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Mostrar Captcha",

    // Widgets
    "dashboard"                 => "Panel",
    "add_remove_widget"         => "Añadir / Eliminar Widgets",
    "enable_tour"               => "Habilitar el recorrido del producto",

    // Product Tour
    "dashboard_desc"            => "Tu panel personal. ¡Los widgets se pueden eliminar, minimizar y mover donde quieras!",
    "private_messages"          => "Mensajes privados",
    "messages_desc"             => "Los mensajes privados son muy útiles para conversaciones privadas con otros operadores del Help Desk.",
    "configure"                 => "Configura tu Help Desk.",
    "configure_desc"            => "SupportPal ofrece una serie de ajustes que te permiten configurar el Help Desk de acuerdo con tus preferencias personales.",
    "default_email"             => "Dirección de correo electrónico por defecto",
    "default_email_desc"        => "La dirección de correo electrónico por defecto que se utiliza para toda la correspondencia saliente para los usuarios.",
    "dept_settings_desc"        => "A veces, puede que los departamentos dentro de tu organización funcionen de manera diferente. Los ajustes de departamento te permiten cancelar los ajustes globales.",
    "department_desc"           => "Los departamentos son exactamente iguales que los de tu organización. Son útiles para asegurar que las consultas de los clientes se dirigen al personal adecuado rápidamente.",
    "department_email"          => "Direcciones de correo electrónico de departamento",
    "dept_email_desc"           => "Múltiples direcciones de correo se pueden asignar a un departamento determinado. Los correos electrónicos se descargarán de cada dirección y se importarán al Help Desk.",
    "dept_tmpl"                 => "Plantillas de correo de departamento",
    "dept_tmpl_desc"            => "A veces puede que quieras cambiar o deshabilitar por completo plantillas de correos de departamento. Puedes definir plantillas de correos de departamento específicas y habilitarlas aquí.",
    "schedule_task_desc"        => "Las tareas programadas se usan para automatizar varios procesos dentro de SupportPal, incluyendo la recopilación de los tickets basados en correos.",
    "schedule_task_2"           => "Las tareas programadas necesitan que se cree un Cron Job para funcionar. El intervalo para cada tarea llevada a cabo por el Cron Job se puede ajustar a través del formulario para editar.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Crea un Cron Job similar al ejemplo mostrado abajo en tu servidor para que las tareas programadas se ejecuten automáticamente.",
    "ticket_channel_desc"       => "Los canales de ticket son métodos de creación de ticket. Estos se pueden extender fácilmente para incluir tus propios canales, por ejemplo, tickets abiertos a través de Instagram.",
    "user_desc"                 => "Los usuarios que interactúan con tu sistema se muestran aquí. Puedes añadir, editar y eliminar usuarios como desees.",
    "organisation_desc"         => "Los usuarios se pueden asignar a organizaciones, permitiéndoles acceder a los tickets abiertos por otros usuarios dentro de su misma organización.",
    "operator_desc"             => "Otros empleados pueden ser añadidos como operadores aquí, además de administrar a qué departamentos están asignados.",
    "ticket_desc"               => "La cuadrícula de los tickets contiene una colección de todos los tickets que son relevantes para ti.",
    "ticket_toolbar"            => "Barra de herramientas",
    "ticket_desc3"              => "La mayor parte de las acciones sobre los tickets se pueden llevar a cabo usando la barra de herramientas de los tickets.",
    "tour_complete"             => "¡Recorrido completado!",
    "tour_complete_desc"        => "Gracias por usar SupportPal.<br /><br /> Ahora te recomendamos que sigas la guía de inicio mostrada abajo para configurar tu Help Desk.",

    // IP Ban
    "ip_ban_time_desc"          => "Si el baneo es permanente o temporal.",
    "expiry"                    => "Expiración",
    "expired"                   => "Expirado",
    "expiry_time"               => "Tiempo de expiración",
    "expiry_time_desc"          => "El período de tiempo en el que expirará el baneo. Si no se ha establecido una fecha anteriormente, se establecerán automáticamente 24 horas desde este momento.",
    "permanent"                 => "Permanente",

    // Languages
    "no_enabled_languages"      => "Error al intentar actualizar la :item. Siempre debe haber una lengua habilitada como mínimo.",

    // General Settings
    "locale"                    => "Localización",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Carpeta del administrador",
    "admin_folder_desc"         => "Establece el nombre de la carpeta para el panel del operador. Por motivos de seguridad, se recomienda cambiarle el nombre \"admin\" por defecto.",
    "enable_ssl"                => "Habilitar SSL",
    "maintenance_mode"          => "Modo de mantenimiento",
    "maintenance_mode_desc"     => "Inhabilita la función pública del Help Desk y muestra un aviso de mantenimiento. Edita resources/templates/frontend/[template]/core/maintenance.twig para cambiar el mensaje que se muestra a los usuarios.",
    "default_user_country"      => "País del usuario por defecto",
    "default_user_country_desc" => "El país que se seleccionará por defecto cuando se registren los usuarios.",
    "system_timezone"           => "Zona horaria del sistema",
    "system_timezone_desc"      => "La zona horaria por defecto se aplica en todo el sistema. Los operadores pueden cambiar su zona horaria en sus ajustes personales.",
    "date_format"               => "Formato de fecha",
    "date_format_desc"          => "El formato de fecha que se usa globalmente.",
    "time_format"               => "Formato de hora",
    "time_format_desc"          => "El formato de hora que se usa globalmente.",
    "simpleauth_key"            => "Clave de SimpleAuth",
    "simpleauth_key_desc"       => "La clave para nuestra opción de inicio de sesión, mínimo 16 caracteres.",
    "simpleauth_operators"      => "Permitir para operadores",
    "base_url"                  => "URL del sistema",
    "base_url_desc"             => "Introduce la dirección completa de la web de tu instalación, utilizada para generar las URLs enviadas a los usuarios.",
    "debug"                     => "Depurar",
    "debug_mode"                => "Modo de depuración",
    "pretty_urls"               => "URLs amigables",
    "pretty_urls_desc"          => "La habilitación eliminará index.php de las URLs, habilítalo solo si puedes acceder al panel del operador sin index.php. Deshabilítalo si no tienes mod_rewrite instalado, si los archivos .htaccess no se permiten o no has convertido las reglas de reescritura de Apache .htaccess para funcionar con tu servidor de web alternativo.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Al habilitar esto, se obligará a todo el front-end y al área del operador a usar conexiones seguras, lo cual es un ajuste que recomendamos. Por favor, asegúrate de que HTTPS funciona correctamente en tu servidor antes de activarlo.",
    "unexpected_template_error" => "Se ha producido un error inesperado mientras la sintaxis comprobaba la plantilla. Por favor, inténtalo de nuevo.",
    "empty_template_preview"    => "Por favor, utiliza una plantilla válida para poder usar la función de previsualización.",
    "no_department_address"     => "Error al intentar encontrar una dirección de departamento en la lista de destinatarios.",
    "email_loop_detected"       => "Bucle detectado - correo enviado desde una dirección de departamento.",
    "email_ticket_locked"       => "Ticket bloqueado. Se le ha pedido al usuario que abra un nuevo ticket a través del correo electrónico.",
    "email_no_body"             => "Error al identificar el cuerpo del mensaje del correo electrónico.",
    "email_runtime_error"       => "Se ha producido un error de ejecución al crear el ticket/la respuesta.",
    "email_reply_disabled"      => "Las respuestas al correo del usuario han sido desactivadas para este departamento.",
    "email_throttled"           => "Demasiados correos entrantes del usuario. El límite son :max_requests correos cada :decay_time minutos.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edita los ajustes que se aplican a todo SupportPal. Si deseas editar ajustes para una sección específica, por ejemplo Tickets, abre la sección en la barra lateral para ver los ajustes disponibles para esa sección. Puedes encontrar los ajustes relacionados con tu(s) marca(s) al hacer click en Marcas en la barra lateral.",
    "brand"                     => "Marca|Marcas",
    "brand_desc"                => "Una marca es tu identidad de cara al cliente con Supportpal, permitiendo varios canales de comunicación. Varias marcas pueden funcionar a la perfección a través de un único y unificado panel de operador.",
    "default_brand"             => "Marca por defecto",
    "default_brand_desc"        => "Selecciona la marca que se utilizará por defecto cuando los visitantes visiten el front-end y no se pueda encontrar una marca correspondiente.",
    "brand_enabled_desc"        => "Alterna para habilitar o deshabilitar la marca. Las marcas deshabilitadas no se pueden utilizar y no formarán parte de las marcas permitidas en tu licencia. La opción de deshabilitar se puede utilizar para ocultar una marca temporalmente y/o retener información. Al eliminar una marca se borrará toda la información, incluyendo los usuarios y los tickets relacionados con ella.",
    "inherit_global_setting"    => "Heredar ajuste global",
    "brand_date_format_desc"    => "El formato de fecha utilizado para el front-end de esta marca.",
    "brand_time_format_desc"    => "El formato de hora utilizado para el front-end de esta marca.",
    "brand_timezone"            => "Zona horaria de la marca",
    "brand_timezone_desc"       => "La zona horaria utilizada por defecto en el front-end de esta marca. Los usuarios tendrán la opcion de seleccionar su propia zona horaria.",
    "brand_default_lang_desc"   => "La lengua utilizada por defecto en el front-end de esta marca.",
    "brand_lang_toggle_desc"    => "Si el menú desplegable de lenguas se debería mostrar en el frontend de esta marca.",
    "brand_groups_desc"         => "Los operadores en los grupos seleccionados serán capaces de crear, actualizar y eliminar (dependiendo de los permisos que posean) tickets y otro contenido en esta marca.",
    "select_brand"              => "Selecciona una marca...",
    "add_another_language"      => "Añadir otra lengua...",
    "mass_email_brand_desc"     => "Por favor, selecciona desde qué marca se enviará el correo. Se utilizará para establecer el envío de un nombre y dirección, cargar la plantilla de correo correcta y en los campos de combinación. Si lo mandas a un grupo de usuarios, solo los usuarios que pertenecen a la marca seleccionada recibirán el correo.",
    "brand_limit_exceeded"      => "Tu licencia solo puede utilizar :allowed marca(s) de manera simultánea. Para comprar marcas adicionales, por favor, visite nuestro área de cliente.",
    "additional_brands"         => "Marcas adicionales",
    "purchase_more"             => "Comprar más",
    "brand_limit_allowed"       => "Tu licencia actual puede utilizar :allowed marca de manera simultánea.|Tu licencia actual puede utilizar :allowed marcas de manera simultánea.",
    "brand_limit_purchase"      => "Si esto no es correcto, por favor <strong>reemite</strong> tu licencia en nuestro <a href='http://www.supportpal.com/manage/' target='_blank'>área del cliente</a> y visita la página <a href=':route'>Información de la licencia</a> para sincronizar tu Help Desk con nuestro servidor de licencia.<br />Para comprar marcas adicionales, por favor <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>actualiza tu licencia</a>.",
    "support_expiry"            => "Tu suscripción de asistencia y actualizaciones es válida hasta :date.",
    "support_status_desc"       => "Por favor <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renueva tu suscripción de asistencia</a> para conseguir las actualizaciones y asistencia más recientes de SupportPal.",
    "ip_ban"                    => "Baneo de IP|Baneos de IP",
    "ip_whitelist"              => "Lista blanca de IP",
    "whitelisted_ip"            => "IP de la lista blanca",
    "license_path"              => "Ruta de instalación",
    "php_info"                  => "Información PHP",
    "log"                       => "Registro|Registros",
    "invalid_department_brand"  => "El departamento no está asignado a la marca del ticket.",
    "incoming_rejected"         => "Recibidos (Rechazados)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Archivos de registro",
    "file_manager_desc"         => "Más abajo puedes descargar o eliminar los registros que almacena el sistema durante la operación, se pueden utilizar con propósitos de depuración. Los archivos de registro se almacenan en ciclos, conservando únicamente los archivos de los 5 últimos días.",
    "app_logs"                  => "Registros de la aplicación",
    "app_logs_desc"             => "Todas las advertencias y errores del uso general del Help Desk se registran aquí. Puede que se te pida que aportes uno o más de estos registros cuando requieras asistencia.",
    "email_logs"                => "Registros de correos",
    "email_logs_desc"           => "Los detalles sobre los correos recibidos se almacenan en estos archivos cuando son analizados e importados como tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Responder a",
    "and_number_others"         => "y :number otra|y otras :number",
    "user_templates"            => "Plantillas del usuario",
    "operator_templates"        => "Plantillas del operador",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Límite de tamaño de archivos adjuntos",
    "attachment_size_desc"      => "El tamaño máximo de todos los archivos adjuntos que se envían en un solo correo. Las opciones disponibles son K (de Kilobytes) y M (de Megabytes). Otra opción diferente asume bytes. Por ejemplo: 5M de 5 Megabytes. Establécelo a 0 para no mandar ningún archivo adjunto por correo y solicítale a los usuarios que se descarguen los archivos a través del Help Desk.",
    "attachment_limit_reached"  => "Se ha alcanzado el límite de tamaño de archivos adjuntos (:size). Por favor, considera otros medios para enviar los archivos (como por ejemplo una URL para descargar).",
    "no_existing_translations"  => "No existen traducciones",
    "add_translation"           => "Añadir traducción",
    "todo_list"                 => "Lista de tareas pendientes",
    "version_check"             => "Comprobación de versión",
    "system_overview"           => "Visión general del sistema",
    "getting_started"           => "Comenzar",
    "operator_notes"            => "Notas del operador",
    "simpleauth_operators_desc" => "Permite a los operadores iniciar y cerrar sesión con SimpleAuth. Recomendamos mantener esta opción desactivada a no ser que la utilices específicamente con este propósito.",
    "upgrade_and_reactivate"    => "Actualizar & Reactivar",
    "upgrade_pending"           => "Actualización pendiente",
    "locale_in_uri"             => "Incluir localización en URI",
    "locale_in_uri_desc"        => "Desactivar para eliminar la localización del URI, por ejemplo: http://support.mycompany.com/en/announcements se convierte en http://support.mycompany.com/announcements. Solo se puede desactivar cuando hay una lengua habilitada en el sistema.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Esta es la lengua por defecto establecida actualmente. Al deshabilitarla, se establecerá otra lengua habilitada como lengua por defecto en su lugar.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Por favor, habilita JavaScript para poder utilizar esta página.",
    "go_to_dashboard"           => "Ir al panel",
    "brand_colour_desc"         => "Selecciona un color para tu marca que se utilizará en el esquema de colores tanto en el front-end como en la plantilla del operador. Deja el campo en blanco para utilizar el esquema de colores predeterminado.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "La imagen del favicon aparece en la barra de direcciones y se utiliza para identificar tu página web. Para conseguir los mejores resultados, asegúrate de que el icono tenga un tamaño de entre 32x32px a 310x310px, sea cuadrado y tenga un formato ICO/PNG.",
    "view_original"             => "Ver original",
    "download_original"         => "Descargar original",
    "consume_all"               => "Opcionalmente, introduce una dirección de correo electrónico de departamento con \"Consumir todo\" habilitado.",
    "reprocess_email"           => "Reprocesar correo electrónico ",
    "reprocess_email_desc"      => "Te recomendamos que revises lo que originalmente bloqueó el correo y que hagas los cambios necesarios antes de intentar reprocesarlo.",
    "email_blocked_desc"        => "Tras varios intentos no se puedo enviar el mensaje, por lo que deberá enviarse manualmente.",
    "captcha_type"              => "Tipo de Captcha",
    "default_captcha"           => "Captcha por defecto",
    "recaptcha_site_key"        => "Clave del sitio web",
    "recaptcha_secret_key"      => "Clave secreta",
    "recaptcha_desc"            => "Por favor, registra un nuevo sitio web en <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, selecciona el tipo correcto de reCAPTCHA y asegúrate de añadir cada dominio de marca. Copia el sitio y la clave secreta de arriba.",
    "enter_code"                => "Introducir código",
    "export_data"               => "Exportar información",
    "export_data_desc"          => "Generar una exportación de información descargable perteneciente a este usuario.",
    "export_data_select"        => "Por favor, selecciona qué información te gustaría exportar.",
    "export_data_scheduled"     => "La exportación se está generando, lo cual puede tardar. Te enviaremos un correo cuando esté disponible para descargar.",
    "database"                  => "Base de datos",
    "database_desc"             => "Los siguientes elementos están almacenados en la base de datos.",
    "prune_users"               => "Los registros de usuarios inactivos se pueden eliminar automáticamente. Un usuario se considera inactivo cuando no ha iniciado sesión o registrado ningún tipo de actividad en un período de tiempo determinado.",
    "prune_tickets"             => "Los tickets inactivos se pueden eliminar automáticamente. Un ticket se considera inactivo si se ha solucionado y no ha registrado ningún tipo de actividad en un período de tiempo determinado.",
    "prune_organisations"       => "Las organizaciónes inactivas se pueden eliminar automáticamente. Una organización se considera inactiva si no tiene ningún usuario vinculado y no ha registrado ningún tipo de actividad en un período de tiempo determinado.",
    "prune_export"              => "La información exportada del usuario se almacena en el sistema de archivos pero puede ocupar espacio, por lo que puedes eliminar archivos exportados generados antes de una fecha determinada.",
    "automatically_prune"       => "Eliminar automáticamente",
    "days_after_saved"          => "Registros después de",
    "days_after_last_activity"  => "Registros inactivos después de",
    "record_permanent_delete"   => "Los registros se eliminarán permanentemente, lo que tendrá un impacto en los informes.",
    "record_delete_relations"   => "Los registros se eliminarán permanentemente junto con la siguiente información relacionada: :relations. Esto tendrá un impacto en los informes.",
    "manually_prune"            => "Eliminar registros manualmente creados antes de",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Si habilitas este ajuste cuando la página no carga correctamente, puede que se te bloquee el acceso a SupportPal.",
    "verify_frontend_loads"     => "Por favor, verifica que el front-end carga correctamente más abajo.",
    "twig_operator_reply_template"   => "El campo de combinación {{ operator.reply_template|raw }} será procesado al tiempo de ejecución por lo que la previsualización puede ser incorrecta.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Permite ejecutar otras marcas en tu instalación de SupportPal.",
    "no_branding"               => "No mostrar marca",
    "no_branding_desc"          => "Elimina la marca de SupportPal de lo que ve el cliente en el Help Desk.",
    "multi_ip"                  => "Asistencia multi-IP",
    "multi_ip_desc"             => "Permite asociar SupportPal a más de una IP interna/externa.",
    "purchase"                  => "Comprar",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Habilita el modo de depuración para mostrar errores. Utilízalo solo para depuración o instruído por asistencia. De otra manera, los errores y otros mensajes de registro útiles se almacenan en los registros de la aplicación, y se pueden descargar en Utilidades -> Registros -> Archivos de registro.",
    "record_trash_relations"    => "Los registros se moverán a la papelera y serán eliminados permanentemente después de :number días junto con toda la información relacionada: :relations. Esto tendrá un impacto en los informes.",
    "uninstall_plugable_warning" => "Al desinstalar el :plugable se eliminarán todos los archivos y la información asociados. En su lugar, recomendamos desactivar el :plugable.",
    "web_settings_desc"         => "Los ajustes del canal de la web se aplican en el frontend. Por defecto, cualquier persona que conozca una URL de ticket única puede acceder a los tickets. Puedes desactivar esto y solicitar que los usuarios inicien sesión antes de que puedan acceder a la información del ticket.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Por favor, introduce una cadena (una palabra o correo electrónico que prohibir). Ninguna de las cadenas distingue entre mayúsculas y minúsculas.",
    "spam_is_regex_desc"        => "Las reglas se pueden aprovechar de las expresiones regulares; si quieres hacer eso, por favor, habilita este ajuste. No necesitas incluir delimitadores.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "El/Los archivo(s) no se pudieron subir debido a un error del servidor.",
    "insert_image"              => "Insertar imagen",
    "quote"                     => "Cita",
    "code"                      => "Código",
    "format"                    => "Formato",
    "paragraph"                 => "Párrafo",
    "heading1"                  => "Título 1",
    "heading2"                  => "Título 2",
    "heading3"                  => "Título 3",
    "heading4"                  => "Título 4",
    "heading5"                  => "Título 5",
    "heading6"                  => "Título 6",
    "upload"                    => "Subir",
    "more_formatting"           => "Más formato",
    "clearformat"               => "Borrar formato",
    "bold"                      => "Negrita",
    "underline"                 => "Subrayado",
    "italic"                    => "Cursiva",
    "strikethrough"             => "Tachado",
    "font_color"                => "Color de la fuente",
    "insert_link"               => "Insertar Link",
    "edit_link"                 => "Editar Link",
    "unlink"                    => "Desactivar link",
    "orderedlist"               => "Lista ordenada",
    "unorderedlist"             => "Lista sin ordenar",
    "outdent"                   => "Anular sangría",
    "indent"                    => "Aplicar sangría",
    "lists"                     => "Listas",
    "edit_html"                 => "Editar HTML",
    "sEmptyTable"               => "No hay información disponible en la tabla",
    "sInfo"                     => "Mostrando _START_ a _END_ de _TOTAL_ entradas",
    "sInfoEmpty"                => "Mostrando 0 a 0 de 0 entradas",
    "sInfoFiltered"             => "(filtradas de un total de _MAX_ entradas)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Mostrando _MENU_ entradas",
    "sLoadingRecords"           => "Cargando...",
    "sProcessing"               => "Procesando...",
    "sSearchPlaceholder"        => "Buscar...",
    "sZeroRecords"              => "No se ha encontrado ningún registro que coincida",
    "sSortAscending"            => ": activar para mostrar en orden ascendente",
    "sSortDescending"           => ": activar para mostrar en orden descendente",
    "incoming_auto_reply"       => "Entrante (Auto-Respuesta)",
    "logo_dark_mode"            => "Logo modo oscuro",
    "logo_dark_mode_desc"       => "Si tu logo está diseñado para funcionar solo con un fondo claro, establece un logo diferente para el modo oscuro. El campo puede ser una ruta de acceso al directorio base (recomendamos que guardes el logo en resources/assets/folder) o una URL directa a la imagen.",
    "template_mode"             => "Modo plantilla",
    "template_mode_desc"        => "Establece un modo oscuro o claro para la interfaz. Los usuarios podrán seleccionar sus preferencias en su perfil.",
    "light_mode"                => "Modo claro",
    "dark_mode"                 => "Modo oscuro",
    "logo"                      => "Logo",
    "logo_desc"                 => "Cambia el logo por defecto para esta marca. El campo puede ser una ruta de acceso al directorio base (recomendamos que guardes el logo en resources/assets/folder) o una URL directa a la imagen.",
    "website_url"               => "URL de la página web",
    "website_url_desc"          => "Añade un link para volver a tu página web principal en el encabezado del portal de support.",
    "back_to_website"           => "Regresar al sitio web",
    "template"                  => "Plantilla",
    "how_can_we_help"           => "¿Cómo podemos ayudarte hoy?",
    "ticket_desc2"              => "La cuadrícula de los tickets se puede ordenar de acuerdo a tus preferencias y se puede filtrar como necesites.",
    "zip_extension_required"    => "La extensión Zip PHP no está instalada. Por favor, instálala e inténtalo de nuevo.",
    "zip_file_not_downloaded"   => "El archivo zip no se ha podido descargar. Verifica que puedes acceder: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Integración de terceros|Integraciones de terceros",
    "oauth"                     => "OAuth",
    "oauth_data"                => "Datos de OAuth",
    "client_id"                 => "ID del cliente",
    "client_secret"             => "Secreto del cliente",
    "create_credentials"        => "Por favor, crea las credenciales de autenticación a través de la página de <a href=\":route\">Integración de terceros</a>.",
    "oauth_data_missing"        => "La ID del cliente y/o el secreto no se han configurado aún y son necesarios. Una vez que los hayas configurado siguiendo estas instrucciones, cierra la ventana emergente y vuelva a validar.",
    "configure_after_brand_created" => "Esto puede configurarse después de que la marca haya sido creada.",
    "get_access_token"          => "Obtener el token de acceso",
    "reset_access_token"        => "Restablecer el token de acceso",

    /*
     * 3.4.0
     */
    "brand_name"                => "Nombre de la marca",
    "brand_name_desc"           => "Tu nombre de la marca se utiliza en toda la correspondencia con los usuarios.",
    "supportpal_announcements"  => "Anuncios de SupportPal",
    "add_selectize"             => "Añadir <strong>:item</strong>...",
    "general_settings"          => "Configurar ajustes generales",
    "configure_brand"           => "Configurar marca",
    "configure_department"      => "Configurar departamento",
    "setup_cron"                => "Establecer Cron Job",
    "channel_settings"          => "Actualizar ajustes de canal del ticket",
    "add_user"                  => "Añadir un nuevo usuario",
    "open_ticket"               => "Abrir un nuevo ticket",
    "reply_ticket"              => "Responder al ticket",
    "new_version_available"     => "Nueva versión disponible",
    "new_version_desc"          => "Existe una nueva versión de SupportPal. Recomendamos que siempre tengas la versión más reciente.<div class='description'>Al aceptar este aviso, no se volverá a mostrar hasta que haya otra nueva versión.</div>",
    "acknowledge"               => "Aceptar",
    "running_latest_version"    => "Estás ejecutando la versión más reciente.",
    "running_prerelease"        => "Estás ejecutando una versión preliminar.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Resultados por página",
    "class_name"                => "Nombre de la clase",
    "possible_permission_issue" => "Estás ejecutando el comando como \":cli_user\", mientras que \":path\" es propiedad de \":path_user\", lo que puede llevar a problemas de permiso de archivo.",
    "system_update"             => "Actualización del sistema",
    "system_update_desc"        => "Actualizar SupportPal a la última versión disponible.",
    "update_available"          => "Actualización disponible",
    "up_to_date"                => "Actualizado",
    "release_notes"             => "Notas de la versión",
    "about_to_update_to"        => "Estás a punto de actualizar a la versión <strong>:version</strong>. Se realizará automáticamente una copia de seguridad completa del sistema antes de la actualización.",
    "waiting_for_update_start"  => "Esperando a que comience la actualización... Esto puede tardar algunos minutos.",
    "binary_paths"              => "Rutas binarias",
    "binary_paths_desc"         => "La variable de entorno PATH se utiliza para encontrar los binarios necesarios. Si no se encuentran uno o más binarios, se puede especificar la ruta completa de cada archivo binario.",
    "cron_makesure"             => "Para ayuda al registrar el Cron Job, visita <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Ayuda para el Cron Job</a>.",
    "cron_must_run_for_update"  => "El Cron Job debe estar en ejecución para utilizar esta función.",
    "support_expired"           => "El soporte y las actualizaciones de tu licencia han expirado.",
    "update_permitted_version"  => "La licencia solo permite actualizar a la versión :version.",
    "update_renew_support"      => "Para obtener la última versión de SupportPal, por favor, renueva el soporte y las actualizaciones.",
    "renew"                     => "Renovar",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Trabajos en segundo plano",
    "background_jobs_not_processing" => "Los trabajos en segundo plano no se están procesando actualmente, consulte los <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>pasos de solución de problemas</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Complemento|Complementos",
    "addon_already_exists"      => "Ya existe un complemento en esta ruta: :path",
    "addons_marketplace"        => "Marketplace",
    "addons_missing_valid_artifact" => "El complemento no tiene un archivo válido.",
    "checksum_not_matched"      => "El archivo descargado no ha superado la suma de verificación.",
    "invalid_archive_format"    => "El artefacto no debería incluir otros directorios que no sean el complemento.",
    "downloading_version"       => "Descargando la versión :version del complemento en :path...",
    "extracting_addon"          => "Extrayendo archivos del complemento...",
    "activating_addon"          => "Activando el complemento...",
    "addon_install_success"     => "El complemento se ha instalado correctamente.",
    "addon_install_error"       => "El complemento no se ha podido instalar. Por favor, comprueba los registros de la aplicación para obtener más información.",
    "addon_latest_version"      => "El complemento ya tiene la última versión.",
    "addon_update_success"      => "Complemento actualizado correctamente.",
    "addon_update_error"        => "El complemento no se ha podido actualizar y se ha revertido. Por favor, comprueba los registros de la aplicación para obtener más información.",
    "addon_basic_info"          => "Por favor, proporciona información básica sobre el complemento.",
    "addon_author_name"         => "Nombre del autor",
    "addon_author_uri"          => "URI del autor (link de tu página web)",
    "addon_author_uri_short"    => "URI del autor",
    "addon_vendor_name"         => "Nombre del proveedor (nombre de tu compañía, puede ser el mismo que el nombre del autor)",
    "addon_vendor_name_short"   => "Nombre del proveedor",
    "addon_name"                => "Nombre del complemento",
    "addon_description"         => "Descripción del complemento",
    "addon_creating"            => "Creando complemento...",
    "addon_ready"               => "¡Complemento listo en :directory! Construye algo increíble.",
    "addon_version_not_supported" => "La versión disponible del complemento no es compatible con la versión instalada de SupportPal.",
    "no_addons_found"           => "No se encontraron complementos.",
    "price"                     => "Precio",
    "one_time"                  => "Una sola vez",
    "monthly"                   => "Mensualmente",
    "quarterly"                 => "Trimestralmente",
    "semiannually"              => "Semestralmente",
    "annually"                  => "Anualmente",
    "biennially"                => "Cada dos años",
    "triennially"               => "Cada tres años",
    "tag"                       => "Etiqueta|Etiquetas",
    "login_to_install"          => "<a href=':link'>Inicia sesión</a> para comenzar la instalación",
    "marketplace_login_error"   => "El inicio de sesión ha fallado. Por favor, <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>cierra sesión</a> y a continuación asegúrate de iniciar sesión en la cuenta en la que tienes la licencia de SupportPal.",
    "payment_required"          => "Pago requerido",
    "addon_purchase_info"       => "Al hacer clic en el botón superior, el precio indicado se te cobrará en la cuenta con en el ciclo de facturación seleccionado, y también consideraremos que aceptas nuestras <a href=':link' target='_blank'>condiciones del servicio</a>.",
    "addon_cancel_info"         => "La cancelación desactivará inmediatamente el complemento y se dejará de cobrar el pago.",
    "system_health"             => "Mantenimiento del sistema",
    "system_health_desc"        => "El mantenimiento del sistema controla que el mismo funcione correctamente y te notifica cuando surge algún problema.",
    "system_health_errors"      => "Se ha producido un error con uno o más controles del <a href=':link'>mantenimiento del sistema</a>.",
    "app_log_check"             => "Recuento de errores del registro de aplicaciones",
    "app_log_errors_exist"      => "El archivo de registro de la aplicación para hoy contiene errores. Por favor, comprueba los registros dirigiéndote a Utilidades -> Registros -> Archivos de registro -> :filename",
    "redis_check"               => "Conexión a Redis",
    "web_server_check"          => "Servidor web",
    "web_server_error"          => "No ha sido posible conectarse a :url",
    "redirection_rules_check"   => "Reglas de redirección",
    "redirection_rule_error"    => "Las reglas de redirección del servidor deben eliminar /index.php de la ruta. De lo contrario, es posible que los atacantes puedan acceder a sus archivos.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "El cron no se está ejecutando.",
    "cron_check_warning"        => "Las siguientes tareas: (:tasks) no se han ejecutado dentro de su intervalo previsto.",
    "database_check"            => "Conexión a la base de datos",
    "disk_usage_check"          => "Espacio libre en disco",
    "email_queue_check"         => "Cola de correo electrónico saliente",
    "email_queue_warning"       => "La cola de correo electrónico contiene :number correos que requieren atención manual.",
    "pipe_check"                => "Canalización de correos electrónicos",
    "file_not_found"            => "El archivo ':path' no se ha encontrado.",
    "file_not_executable"       => "El archivo ':path' no se puede ejecutar.",
    "dependency_resolution"     => "No se puede ejecutar el mantenimiento del sistema.",
    "debug_mode_warning"        => "El modo de depuración sólo debe utilizarse temporalmente.",
    "custom_colour"             => "Color personalizado",
    "remove_colour"             => "Eliminar color",
    "background_colour"         => "Color de fondo",
    "open_link"                 => "Abrir enlace",
    "open_link_in"              => "Abrir enlace en...",
    "new_window"                => "Nueva ventana",
    "current_window"            => "Ventana actual",
    "edit_image"                => "Editar imagen...",
    "alternative_description"   => "Descripción alternativa",
    "browse_image"              => "Buscar una imagen",
    "drop_image"                => "Soltar una imagen aquí",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Atajos de teclado",
    "enable_keyboard_shortcuts" => "Habilitar atajos de teclado",
    "shortcut_global"           => "Atajos globales",
    "shortcut_toggle"           => "Activar el diálogo de atajos de teclado",
    "shortcut_start_search"     => "Comenzar búsqueda",
    "shortcut_goto_new_ticket"  => "Ir a la página de abrir nuevo ticket",
    "shortcut_ticket_view"      => "Atajos de la visualización de tickets",
    "shortcut_focus_reply"      => "Enfocar el formulario de respuesta",
    "shortcut_focus_notes"      => "Enfocar el formulario de notas",
    "shortcut_focus_forward"    => "Enfocar el formulario de reenvío",
    "shortcut_toggle_user_tab"  => "Activar la pestaña de detalles del usuario en la barra lateral",
    "shortcut_take_ticket"      => "Tomar ticket",
    "shortcut_close_ticket"     => "Cerrar ticket",
    "shortcut_lock_ticket"      => "Cerrar & bloquear ticket",
    "shortcut_unlock_ticket"    => "Desbloquear ticket",
    "shortcut_trash_ticket"     => "Mover ticket a la papelera",
    "shortcut_block_user"       => "Bloquear usuario y mover ticket a la papelera",
    "shortcut_watch_ticket"     => "Seguir ticket",
    "shortcut_unwatch_ticket"   => "Dejar de seguir ticket",
    "shortcut_merge_ticket"     => "Fusionar ticket",
    "shortcut_unmerge_ticket"   => "Separar ticket",
    "shortcut_expand_all"       => "Expandir todos los mensajes",
    "shortcut_collapse_all"     => "Contraer todos los mensajes",
    "shortcut_print_ticket"     => "Imprimir la información del ticket y los mensajes",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Error de conexión a la base de datos, comprueba :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Favicon de modo oscuro",
    "favicon_dark_mode_desc"    => "Si tu favicon fue diseñado para funcionar sólo sobre un fondo claro, configura un favicon diferente para el modo oscuro. Este solo se utilizará si tu navegador y/o sistema operativo funcionan en modo oscuro.",
    "template_mode_system_desc" => "Al elegir el sistema, el modo de plantilla se sincronizará con el modo claro u oscuro en función de la configuración del tema de tu sistema operativo.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / Ninguno",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "Se ha producido un error al enviar el correo. Se intentará volver a enviar :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "Conexión a Web Sockets",
    "websockets_not_running"    => "Imposible conectarse al servidor de web sockets.",
    "search_driver_check"       => "Motor de búsqueda",
    "search_driver_not_working" => "El motor de búsqueda configurado no funciona correctamente.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Ruta temporal",
    "temporary_path_desc"       => "La ruta temporal se utiliza para almacenar archivos durante la actualización. Por defecto se utiliza la ruta temporal del sistema. La ruta debe tener al menos 3 GB de espacio libre.",
    "background_jobs_desc"      => "A continuación figura una lista de tareas en segundo plano que han fallado recientemente.",
    "failed_jobs"               => "Tareas fallidas",
    "horizon_dashboard"         => "Panel de control Horizon",
    "job"                       => "Tarea|Tareas",
    "job_payload"               => "Carga de tareas",
    "job_exception"             => "Excepción de tareas",
    "failed_at"                 => "Fallos",
    "queue"                     => "Cola",
    "exception"                 => "Excepción",
    "data"                      => "Datos",
    "failed_background_jobs"    => "Una o más <a target='_blank' href=':link'>tareas en segundo plano</a> han fallado y necesitan atención manual",

    /*
     * 5.3.0
     */
    "incoming_duplicate"        => "Recibidos (Duplicados)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "El método de correo electrónico se ha sobrescrito en los <a href=':link' target='_blank'>ajustes por defecto de la marca</a>.",
    "addon_not_found"           => "No se ha encontrado el complemento.",
    "deactivating_addon"        => "Desactivando complemento...",
    "addon_already_activated"   => "Complemento ya activado",
    "addon_already_deactivated" => "Complemento ya desactivado.",
    "addon_cannot_deactivate"   => "El complemento no se puede desactivar.",
    "addon_activation_failed"   => "Ha fallado la activación del complemento, comprueba el registro de la aplicación para obtener más información.",
    "addon_deactivation_failed" => "Ha fallado la desactivación del complemento, comprueba el registro de la aplicación para obtener más información.",
    "site_key"                  => "Clave del sitio web",
    "secret_key"                => "Clave secreta",
    "turnstile_desc"            => "Registra un nuevo widget Turnstile en <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Copia la clave del sitio web y la secreta anteriores.",
    "hcaptcha_desc"             => "Registra un <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Copia la clave del sitio web y la secreta anteriores.",
    "captcha_type_desc"         => "Selecciona el Captcha que se utilizará en el sistema.",

    /*
     * 5.5.0
     */
    "ticket_channel_2"          => "Ofrecemos una serie de ticket canales por defecto. Canales adicionales y otros complementos que pueden instalarse desde el Marketplace de complementos.",
    "selected_country_aria_label" => "País seleccionado",
    "no_country_selected"       => "Ningún país seleccionado",
    "country_list_aria_label"   => "Lista de países",
    "zero_search_results"       => "No se han encontrado resultados",
    "one_search_result"         => "1 resultado encontrado",
    "multiple_search_results"   => "\${count} resultados encontrados", // ${count} is a JS variable and should not be changed.
    "advanced"                  => "Avanzado",
    "table"                     => "Tabla",
    "cell"                      => "Celda",
    "cell_properties"           => "Propiedades de la celda",
    "merge_cells"               => "Combinar celdas",
    "split_cell"                => "Dividir celda",
    "row"                       => "Fila",
    "inset_row_before"          => "Insertar fila encima",
    "inset_row_after"           => "Insertar fila debajo",
    "delete_row"                => "Eliminar fila",
    "row_properties"            => "Propiedades de la fila",
    "cut_row"                   => "Cortar fila",
    "copy_row"                  => "Copiar fila",
    "paste_row_before"          => "Pegar fila encima",
    "paste_row_after"           => "Pegar fila debajo",
    "column"                    => "Columna",
    "insert_column_before"      => "Insertar columna a la izquierda",
    "insert_column_after"       => "Insertar columna a la derecha",
    "delete_column"             => "Eliminar columna",
    "cut_column"                => "Cortar columna",
    "copy_column"               => "Copiar columna",
    "paste_column_before"       => "Pegar columna a la izquierda",
    "paste_column_after"        => "Pegar columna a la derecha",
    "table_properties"          => "Propiedades de la tabla",
    "delete_table"              => "Eliminar tabla",
    "width"                     => "Ancho",
    "height"                    => "Alto",
    "cell_spacing"              => "Espaciado entre celdas",
    "cell_padding"              => "Relleno de celda",
    "border_width"              => "Grosor del borde",
    "caption"                   => "Título",
    "show_caption"              => "Mostrar título",
    "alignment"                 => "Alineación",
    "border_style"              => "Estilo del borde",
    "border_colour"             => "Color del borde",
    "cell_type"                 => "Tipo de celda",
    "scope"                     => "Ámbito",
    "horizontal_align"          => "Alineación horizontal",
    "vertical_align"            => "Alineación vertical",
    "header_cell"               => "Celda de encabezado",
    "row_group"                 => "Grupo de filas",
    "column_group"              => "Grupo de columnas",
    "left"                      => "Izquierda",
    "center"                    => "Centrado",
    "right"                     => "Derecha",
    "top"                       => "Arriba",
    "middle"                    => "Centro",
    "bottom"                    => "Abajo",
    "anchor"                    => "Ancla",
    "example"                   => "Ejemplo",

    /*
     * 5.6.0
     */
    "email_template_enabled_desc" => "Al desactivar la plantilla de correo electrónico, se impedirá el envío de notificaciones que utilicen esta plantilla.",
    "template_disabled"         => "Plantilla desactivada",
    "reset_email_template"      => "Esto actualizará el editor con el contenido predeterminado de la plantilla de correo electrónico. Los cambios realizados anteriormente se perderán una vez guardada la plantilla de correo electrónico.",

    /*
     * 5.7.0
     */
    "cursor_position"           => "Posición del cursor",
    "set_cursor_position"       => "Establecer la posición del cursor",
    "private_message_notification" => "Nuevo mensaje privado del operador",
    "private_message_notification_desc" => "Te notifica cuando recibes correspondencia de otro operador por mensaje privado.",

    /*
     * 5.7.3
     */
    "solid"                     => "Sólido",
    "dashed"                    => "Discontinuo",
    "dotted"                    => "Punteado",
);
