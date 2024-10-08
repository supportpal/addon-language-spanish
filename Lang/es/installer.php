<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Error en los requisitos del sistema",

    // Index
    "supportpal_installer"      => "Instalador SupportPal",
    "select_language"           => "Selecciona una lengua:",
    "install_type"              => "Tipo de instalación",
    "install"                   => "Instalado reciente",
    "upgrade"                   => "Actualizar una instalación existente",
    "support"                   => "El código de licencia utilizado para esta instalación no tiene un soporte válido ni una suscripción de actualizaciones, y como tal, no es válido para instalar esta versión de Supportpal. Por favor, <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renueva</a> tu soporte y suscripción de actualizaciones o revierte tus archivos de instalación.",

    // Upgrade
    "successfully_updated"      => "Enhorabuena, SupportPal se ha actualizado con éxito.",

    // Install
    // Step 1
    "step_1"                    => "Paso 1 de 7: Aceptar CLUF",
    "step_1_desc"               => "Por favor, lee nuestro contrato de licencia de software más abajo. Al continuar, estarás aceptando el contrato.",
    "i_accept_and_continue"     => "Acepto y continúo",

    // Step 2
    "step_2"                    => "Paso 2 de 7: Requisitos del sistema",
    "not_available"             => "No está disponible",
    "php_version"               => "Versión PHP",
    "php_version_not_found"     => "No está disponible, versión PHP encontrada: :version",
    "php_extensions"            => "Extensiones PHP",
    "file_writeable"            => "Permisos de archivo",
    "file_writeable_desc"       => "Todo lo de abajo debería poder ser editado por el servidor web. Recomendamos utilizar permisos de archivo 755, aunque algunos sistemas puede que requieran 777 si el usuario del servidor web no es el dueño de los archivos. Los directorios deberían ser editables de manera recurrente.",

    // Step 3
    "step_3"                    => "Paso 3 de 7: Base de datos",
    "step_3_desc"               => "Por favor, introduce los detalles de la base de datos que has configurado para SupportPal.",
    "hostname"                  => "Nombre de host",
    "port"                      => "Puerto",
    "port_desc"                 => "(Cambiar sólo si no es el puerto predeterminado 3306)",
    "database"                  => "Base de datos",
    "database_not_empty"        => "La base de datos no puede contener tablas.",

    // Step 4
    "step_4"                    => "Paso 4 de 7: Crear tablas",
    "step_4_desc"               => "La migración se llevará a cabo en segundo plano y se hará un registro detallado escrito abajo. Esto puede tardar varios minutos. Una vez completado, haz click en el botón de continuar que aparecerá.",

    // Step 5
    "step_5"                    => "Paso 5 de 7: Cuenta del operador",
    "step_5_desc"               => "SupportPal requiere una licencia válida para funcionar. Por favor, introduce una más abajo.",
    "license_desc"              => "La clave de tu licencia de SupportPal tiene 23 caracteres de largo y empieza con SP-",
    "operator_desc"             => "Por favor, crea una cuenta de administrador para el panel del operador introduciendo todos los detalles más abajo.",
    "validating_license"        => "Validando licencia...",

    // Step 6
    "step_6"                    => "Paso 6 de 7: Configuración rápida",
    "step_6_desc"               => "Introduce los detalles de tu compañía y sitio web más abajo.",
    "locale_desc"               => "Establece los ajustes de localización para tu sistema.",
    "operator_success"          => "Tu cuenta de administrador ha sido creada.",

    // Step 7
    "step_7"                    => "Paso 7 de 7: ¡Instalado!",
    "successfully_installed"    => "Enhorabuena, SupportPal se ha instalado con éxito.",
    "operator_panel"            => "Panel del operador",
    "help_desc"                 => "Si necesitaras alguna ayuda para configurar o utilizar SupportPal, tenemos dos fuentes principales de información:",
    "submit_a_ticket"           => "Enviar un ticket",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Cumples :required de los :total requisitos necesarios.",
    "optional_requirements"     => "Cumples :optional de los :total requisitos opcionales.",
    "both_requirements"         => "Cumples :required de los :total_required requisitos necesarios y :optional de los :total_optional requisitos opcionales.",
    "php_version_is"            => "Tu versión PHP es :version.",
    "enabled"                   => "Habilitado",
    "disabled"                  => "Deshabilitado",
    "php_settings"              => "Ajustes PHP",
    "ipv6_support"              => "Asistencia IPv6",
    "memory_limit"              => ">= 128MB de memoria",
    "memory_limit_error"        => "Tu límite de memoria es ':limit'.",
    "permission_denied"         => "Permiso denegado",
    "writable"                  => "Editable",
    "help_php_version"          => "Para asistencia al instalar una versión nueva de PHP, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "help_php_extensions"       => "Las extensiones PHP pueden ser diferentes dependiendo de tu servidor, tu host y otras variables del sistema. Para asistencia al instalar las extensiones que faltan, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "help_php_settings"         => "Para asistencia adicional, por favor, lee <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Ayuda para los ajustes de PHP</a>.",
    "disabled_functions"        => "Funciones deshabilitadas",
    "help_mysql_version"        => "Para asistencia al instalar una versión nueva de MySQL, por favor, contacta con tu proveedor de host o el administrador de servidor.",
    "mysql_version"             => "Versión MySQL",
    "mysql_version_not_found"   => "No está disponible, versión MySQL encontrada: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Si tu servidor tiene compatibilidad de red IPv6, por favor, instala la extensión php-sockets.",
    "email_address_desc"        => "Introduce la principal dirección de correo electrónico de tu compañía. Esta se configurará como la dirección de correo electrónico por defecto y la de tu primer departamento. Podrás añadir otras direcciones de correo electrónico más tarde.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "Se requiere una versión ionCube Loaders :required o superior. Hemos encontrado: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "Asistencia PNG & JPEG",
    "allow_url_fopen"           => "'allow_url_fopen' Habilitado",
    "allow_url_fopen_failure"   => "Habilitar 'allow_url_fopen' en tu archivo php.ini para usar Gravatar y otras características.",
    "allowed_methods"           => "Métodos permitidos HTTP",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Versión del servidor >= :min",
    "mysql_server_version_desc" => "MySQL :min o superior se requiere para ejecutar SupportPal. Hemos encontrado: ':version'.",

    "upgrade_step"              => "Paso :num de :total: ",
    "accept_eula"               => "Aceptar CLUF",
    "system_requirements"       => "Requisitos del sistema",
    "update_database"           => "Actualizar base de datos",
    "upgrade_complete"          => "Actualización completada",

    "upgrade_support"           => "Si tuvieras algún problema o necesidad al utilizar las nuevas características de SupportPal, por favor, lee nuestra documentación o abre un ticket con nosotros.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Por favor, haz click en el botón más abajo para comenzar.",
    "locked"                    => "Instalación/Actualización en curso",

    "error_and_empty_database"  => "Ha habido un error. Puede que necesites vaciar la base de datos antes de volver a comenzar.",
    "login_with_details"        => "Puedes iniciar sesión utilizando los detalles especificados previamente.",
    "command_not_available"     => "Comando no disponible. Si consideras que esto es un error, por favor, ejecuta 'php artisan cache:clear' y luego vuelve a ejecutar este comando.",
    "read_upgrade_guide"        => "Nuestra Guía de Actualización contiene información útil con respecto a cambios drásticos y prácticas recomendadas para la actualización:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[ADVERTENCIA] Asegúrate de haber hecho una copia de seguridad de la base de datos de Supportpal y los archivos de aplicaciones antes de continuar con el proceso.\nPor favor, confirma que has hecho una copia de seguridad, verificado que no está dañada y que estás listo para continuar.",
    "error_and_revert_database" => "Ha habido un error. Por favor, revierte la base de datos a tu copia de seguridad antes de volver a comenzar.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "El archivo de la configuración de la base de datos ya existe. Si estás seguro de que la aplicación no está ya instalada, por favor, elimina /config/:environment/database.php and start again.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Gracias por elegir SupportPal. Por favor, comprueba que el tipo de instalación es correcto y haz clic en continuar.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Propagación",
    "seeded"                    => "Propagado",
    "migrating"                 => "Migrando",
    "migrated"                  => "Migrado",
    "database_setup_complete"   => "Configuración de la base de datos completa.",
    "created_repository"        => "Se ha creado el repositorio ':name' con éxito.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Comando no disponible. Por favor, ejecuta app:update para descargar y poder actualizar a la última versión disponible: %s.",
    "suggest_run_upgrade"       => "Ya hay una actualización en progreso. Por favor, ejecuta app:upgrade en su lugar.",
    "failed_to_download"        => "Error al descargar el archivo: :message",
    "backup_failed_abort"       => "La copia de seguridad ha fallado. Cancelando actualización.",
    "command_failed"            => "El comando :command, ha fallado con el siguiente resultado: :message.",
    "already_latest_version"    => "Ya estás ejecutando la última versión (:version).",
    "update_not_supported"      => "No se admite la actualización automática a la última versión (:version).",
    "current_and_new_version"   => "Actualmente tienes la versión :current_version. La última versión disponible es :new_version.",
    "update_to_version"         => "Actualmente tienes la versión :current_version. ¿Te gustaría actualizar a la versión :new_version?",
    "downloading_version"       => "Descargando la versión :version en :path...",
    "checksum_not_matched"      => "El archivo descargado ha fallado la verificación de la suma de comprobación.",

    "check_readiness"           => "Comprobando si es posible que la aplicación se pueda actualizar...",
    "read_only"                 => "El sistema de archivos en \":path\" es de sólo lectura. Las actualizaciones no pueden aplicarse a un sistema de archivos de sólo lectura.",
    "file_ownership"            => "El archivo \":path\" es propiedad de \":owner\" pero PHP se está ejecutando como \":actual\". El propietario del archivo y el usuario de PHP deben ser los mismos durante una actualización para todos los archivos de la aplicación.",
    "minimum_disk_space"        => "El directorio \":path\" no tiene espacio suficiente. Debe haber al menos :space megabytes de espacio disponibles.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Implementación de Docker detectada. Para actualizar, sigue https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Obtén sugerencias para solucionar problemas",

    /*
     * 4.2.0
     */
    "app_manager_version_not_supported" => "El administrador de aplicación (:version) no es compatible.",
    "running_upgrade"           => "Ejecución de la actualización de la aplicación.",
    "upgrade_complete_success"  => "La actualización de la aplicación se ha completado correctamente.",
    "app_manager_requires_update" => "Debe actualizar el administrador de aplicación antes de ejecutar la actualización del Help Desk. :command",

    /*
     * 5.0.0
     */
    "mysql_client_version"      => "Versión del cliente >= :min",
    "mysql_client_version_desc" => "Se requiere la versión :min o superior del cliente MySQL para ejecutar SupportPal. Versión encontrada: ':version'.",
    "post_install"              => "Para que el sistema funcione correctamente, debe configurarse un cron job. Lee nuestra <a href='https://docs.supportpal.com/current/Administration'>documentación</a> para más información sobre esta y otras acciones recomendadas para mejorar la funcionalidad y la seguridad.",
    "help_allowed_methods"      => "Tu servidor web debe permitir todos los métodos HTTP indicados a continuación. Consulta nuestra <a href='https://docs.supportpal.com/current/System+Requirements#WebServer' target='_blank'>nueva documentación de instalación</a> para obtener más informacion.",

    /*
     * 5.3.0
     */
    "check_file_permissions"    => "Comprobando permisos de archivo...",

);
