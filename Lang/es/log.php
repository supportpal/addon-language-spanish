<?php

return array(

    // Standard messages
    "item_created"                      => "Creó nuevo :item :rel.",
    "item_updated"                      => "Actualizó :item :rel.",
    "item_deleted"                      => "Eliminó :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Creó nuevo baneo en IP :rel.",
    "ip_ban_updated"                    => "Actualizó baneo en IP :rel.",
    "ip_ban_deleted"                    => "Eliminó baneo en IP :rel.",
    "banned_ip_on_login"                => "Baneo de IP :rel durante 15 minutos.",

    "ip_whitelist_created"              => "Añadió IP :rel a la lista blanca.",
    "ip_whitelist_updated"              => "Actualizó IP :rel en la lista blanca.",
    "ip_whitelist_deleted"              => "Eliminó IP :rel de la lista blanca.",

    "system_cleanup"                    => "Limpieza del sistema ejecutada en :rel.",

    "api_failed_login"                  => "IP :rel falló al autenticar con el API.",

    "user_successful_login"             => "Inició sesión en el Help Desk.",
    "user_failed_login"                 => "Falló al autenticar.",
    "user_successful_logout"            => "Cerró sesión del Help Desk.",

    "user_registered"                   => "Registró una cuenta.",
    "user_confirmed"                    => "Confirmó su cuenta.",
    "user_password_set"                 => "Estableció una contraseña para su cuenta.",
    "user_password_reset"               => "Restableció la contraseña de su cuenta.",

    "user_added_to_organisation"        => "Usuario :rel añadido a la organización :new_value.",
    "user_removed_from_organisation"    => "Usuario :rel eliminado de la organización :old_value.",
    "user_profile_updated"              => "Actualizó el perfil de la cuenta.",
    "user_left_organisation"            => "Dejó la organización :rel.",
    "user_organisation_emptied"         => "Eliminó todos los usuarios de la organización :rel.",
    "user_organisation_updated"         => "El nivel de acceso de la organización de :rel ha cambiado de :old_value a :new_value.",
    "organisation_membership_updated"   => "Actualizó la suscripción del usuario de la organización :rel.",
    "organisation_profile_updated"      => "Actualizó el perfil de la organización :rel.",
    "organisation_owner_updated"        => "Transfirió la propiedad de la organización :rel a :new_value.",

    "mass_email_queued"                 => "Puso en cola :new_value correos en lotes para ser enviados.",
    "mass_email_sent"                   => "Envió correos :new_value en cola.",

    "email_queue_deleted"               => "Eliminó correos en cola a :rel.",

    "scheduled_task_run"                => "Las tareas programadas :rel se han ejecutado manualmente.",

    "selfservice_article_upvoted"       => "Valoró positivamente el artículo :rel.",
    "selfservice_article_downvoted"     => "Valoró negativamente el artículo :rel.",
    "selfservice_comment_posted"        => "Publicó un nuevo :rel.",
    "selfservice_comment_upvoted"       => "Votó positivamente subiendo la valoración de :rel de :old_value a :new_value.",
    "selfservice_comment_downvoted"     => "Votó negativamente bajando la valoración de :rel de :old_value a :new_value.",

    "ticket_opened"                     => "Abrió un nuevo ticket #:rel.",
    "ticket_opened_on_behalf"           => "Abrió un nuevo ticket #:rel en nombre de :new_value.",
    "ticket_opened_email"               => "Importó correo como nuevo ticket #:rel.",

    "ticket_message_reply"              => "Publicó una nueva respuesta al ticket #:rel.",
    "ticket_message_note"               => "Publicó una nota nueva al ticket #:rel.",
    "ticket_message_deleted"            => "Eliminó un mensaje en el ticket #:rel.",

    "ticket_user_updated"               => "Actualizó el usuario en el ticket #:rel de :old_value a :new_value.",
    "ticket_subject_updated"            => "Actualizó el asunto del ticket #:rel.",
    "ticket_department_updated"         => "Actualizó el departamento en el ticket #:rel de :old_value a :new_value.",
    "ticket_status_updated"             => "Actualizó el estado del ticket #:rel de :old_value a :new_value.",
    "ticket_priority_updated"           => "Actualizó la prioridad del ticket #:rel de :old_value a :new_value.",
    "ticket_tag_added"                  => "Añadió la etiqueta :new_value al ticket #:rel.",
    "ticket_tag_updated"                => "Actualizó las etiquetas en el ticket #:rel.",
    "ticket_tag_removed"                => "Eliminó etiqueta :new_value del ticket #:rel.",
    "ticket_slaplan_updated"            => "Actualizó el plan ANS en el ticket #:rel de :old_value a :new_value.",
    "ticket_duetime_updated"            => "Actualizó la hora de entrega en el ticket #:rel a :new_value.",
    "ticket_customfield_updated"        => "Actualizó los campos personalizados en el ticket #:rel.",
    "ticket_converted_user"             => "Convirtió el ticket interno #:rel a ticket del usuario.",
    "ticket_converted_internal"         => "Convirtió el ticket del usuario #:rel a ticket interno.",

    "ticket_assigned_operator"          => "Asignó :new_value al ticket #:rel.",
    "ticket_unassigned_operator"        => "Desasignó :new_value del ticket #:rel.",
    "ticket_assigned_self"              => "Se asignó a sí mismo al ticket #:rel.",
    "ticket_assigned_updated"           => "Actualizó operadores asignados en el ticket #:rel.",

    "ticket_locked"                     => "Bloqueó el ticket #:rel.",
    "ticket_unlocked"                   => "Desbloqueó el ticket #:rel.",
    "ticket_locked_reply"               => "La respuesta no se pudo añadir al ticket bloqueado #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value fusionado(s) en el ticket #:rel.",
    "ticket_unmerged"                   => "Se ha anulado la fusión del Ticket :rel.",

    "ticket_user_blocked"               => "Correo bloqueado :new_value (del usuario en el ticket #:rel).",

    "ticket_closed"                     => "El ticket #:rel se ha cerrado.",
    "ticket_inactive_closed"            => "Cerró el ticket inactivo #:rel con estado :old_value.",
    "ticket_awaiting_response"          => "Envió un mensaje de espera de respuesta al usuario en el ticket #:rel.",

    "ticket_split_from"                 => "Mensajes separados del ticket antiguo #:rel al ticket nuevo #:new_value.",
    "ticket_split_to"                   => "Mensajes separados del ticket antiguo #:old_value al ticket nuevo #:rel.",

    "ticket_attachment_saved"           => "Añadió archivo adjunto al ticket #:rel.",
    "ticket_attachment_deleted"         => "Eliminó archivo adjunto del ticket #:rel.",

    "ticket_throttled"                  => "Rechazó un ticket nuevo de :rel debido a la limitación.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Añadió archivo adjunto ':new_value' al artículo con ID :rel.",
    "selfservice_attachment_deleted"    => "Eliminó archivo adjunto':new_value' del artículo con ID :rel.",
    "ticket_unassigned_self"            => "Se desasignó a sí mismo del ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "La respuesta puede que no se añada debido a que el ticket pertenece a una marca deshabilitada #:rel.",
    "personal_signatures_updated"       => "Actualizó las firmas personales.",
    "check_email_failed"                => "Error: Fallo al descargar correo de la cuenta :old_value: ':rel'.",
    "ticket_added_cc"                   => "Correo(s) :new_value añadidos a la lista de direcciones CC para el ticket #:rel.",
    "ticket_removed_cc"                 => "Correo(s) :old_value eliminados de la lista de direcciones CC para el ticket #:rel.",
    "invalid_department_brand"          => "Error al establecer el departamento a ':new_value' en el ticket #:rel, el departamento no pertenece a la marca del ticket.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Envió un correo con asunto ':extra_rel1' a :rel.",
    "sent_template_email_to"            => "Envió un correo ':extra_rel1' a :rel.",
    "sent_ticket_email_to_user"         => "Envió un correo ':extra_rel1' al usuario para el ticket #:rel.",
    "sent_email_to_operators"           => "Envió un correo ':extra_rel1' a los operadores.",
    "sent_ticket_email_to_operators"    => "Envió un correo ':extra_rel1' a los operadores para el ticket #:rel.",
    "sent_email_to_operator_group"      => "Envió un correo ':extra_rel1' al grupo de operadores ':new_value' para el ticket #:rel.",
    "ticket_macro_applied"              => "El macro ':new_value' se ejecutó en el ticket #:rel.",
    "ticket_macro_automatic"            => "El macro ':new_value' se ejecutó automáticamente en el ticket #:rel.",
    "email_template_not_found"          => "La plantilla de correo con ID ':new_value' no se ha podido encontrar, por lo que se ha cancelado el envío del correo.",
    "private_conversation_started"      => "Empezó una conversación con :rel.",
    "private_message_sent"              => "Envió un mensaje a :rel.",
    "not_imported_replies_disabled"     => "Se recibió un correo :extra_rel1 para el ticket #:rel, pero no se importó ya que las respuestas de correo del ticket están desactivadas.",
    "not_imported_ticket_locked"        => "Se recibió un correo :extra_rel1 para el ticket #:rel, pero no se importó ya que el ticket está bloqueado.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "El usuario del Ticket se añadió al grupo de usuarios :new_value.",
    "ticket_user_removed_from_group"    => "El usuario del Ticket fue eliminado del grupo de usuarios :old_value.",
    "email_on_behalf"                   => "Reenvió :extra_rel2 en nombre de ':extra_rel1' en el ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Envió un correo ':extra_rel1' a :new_value, el departamento no acepta correos de usuarios que no están registrados.",
    "deleted_user"                      => "Eliminó :item ':rel' con dirección de correo ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Vinculó el ticket #:rel con el ticket :extra_rel1.",
    "unlinked_ticket"                   => "Desvinculó el ticket #:rel del ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Eliminó archivo adjunto ':old_value' del correo en cola ':rel'.",
    "forward_ticket_email"              => "Reenvió ticket #:rel a un tercero, ver correo ':extra_rel1'.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Actualizó :rel por :extra_rel1.",
    "selfservice_comment_status"        => "Cambió el estado de :rel por :extra_rel1 de :old_value a :new_value.",
    "selfservice_comment_deleted"       => "Eliminó el comentario de :extra_rel1.",
    "ticket_message_posted"             => "Publicó un nuevo :extra_rel1 para el ticket #:rel.",
    "ticket_message_edited"             => "Editó un :extra_rel1 en el ticket #:rel.",
    "email_send_failed"                 => "Error al enviar el correo.",
    "ticket_brand_updated"              => "Actualizó la marca del ticket #:rel de :old_value a :new_value.",
    "export_scheduled"                  => "Una exportación del usuario :rel ha sido programada.",
    "deleted_inactive_records"          => "Se eliminó automáticamente :old_value :rel inactivo(s).",
    "deleted_old_records"               => "Se han eliminado automáticamente registros antiguos de :rel.",
    "sent_email_to_user_group"          => "Correo en cola para el grupo de usuarios ':new_value' para el ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Siguiendo el ticket #:rel.",
    "ticket_unwatching"                 => "Ya no sigue el ticket #:rel.",
    "ticket_watch_operator"             => "Establece :new_value para seguir el ticket #:rel.",
    "ticket_unwatch_operator"           => "Desestablece :new_value de seguir el ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Confirmó la propiedad del correo electrónico en nombre del usuario :rel.",
    "ticket_department_email_updated"   => "Actualizó el correo de departamento en el ticket #:rel de :old_value a :new_value.",
    "ticket_watching_updated"           => "Actualizó los operadores que siguen el ticket #:rel.",
    "ticket_deleted"                    => "Eliminó permanentemente el ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Trasladó ticket #:rel a la papelera.",
    "ticket_restored"                   => "Restauró ticket #:rel de la papelera.",
    "emptied_ticket_trash"              => "Automaticamente se vació la papelera de tickets de ':old_value' registros.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Se ha establecido un nuevo seguimiento en el ticket #:rel.",
    "ticket_followup_updated"           => "El seguimiento en el ticket #:rel se ha actualizado.",
    "ticket_followup_deleted"           => "El seguimiento en el ticket #:rel se ha eliminado.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Valorado neutral el artículo :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "El usuario :old_value se ha fusionado con el usuario :rel.",
    "user_organisation_merged"          => "La organización del usuario :old_value se ha fusionado con la organización del usuario :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Se han actualizado las plantillas de respuesta de :rel.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => ":item activado/a (complemento) :rel.",
    "addon_deactivated"                 => ":item desactivado/a (complemento) :rel.",
    "addon_installed"                   => ":item instalado/a (complemento) :rel.",
    "addon_uninstalled"                 => ":item desinstalado/a (complemento) :rel.",
    "addon_cancelled"                   => ":item cancelado/a (complemento) :rel.",
    "addon_updated"                     => ":item (complemento) actualizado/a :rel a la versión :new_value.",
    "ticket_reply_duetime_updated"      => "Se ha actualizado el plazo de respuesta en el ticket #:rel a :new_value.",
    "ticket_resolve_duetime_updated"    => "Se ha actualizado el plazo de resolución en el ticket #:rel a :new_value.",
    "ticket_duetime_unset"              => "Desactivar el plazo de resolución en el ticket #:rel.",
    "ticket_reply_duetime_unset"        => "Desactivar el plazo de respuesta en el ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Desactivar el plazo de resolución en el ticket #:rel.",
    "ticket_duetime_paused"             => "Se han pausado los plazos del ticket #:rel.",
    "ticket_duetime_unpaused"           => "Se han reanudado los plazos del ticket #:rel.",
    "user_email_verified"               => "Se ha verificado su dirección de correo electrónico.",
    "marked_email_as_verified"          => "Se ha verificado la propiedad de la dirección de correo electrónico en nombre del usuario :rel.",
    "user_invited_to_organisation"      => "Se ha invitado al usuario :rel a la organización :extra_rel1.",
    "user_accepted_organisation_invite" => "El usuario :rel ha aceptado la invitación a la organización :extra_rel1.",
    "user_additional_email_verified"    => "Se ha verificado una dirección de correo electrónico adicional (:new_value).",
    "export_generated"                  => "La exportación :new_value se ha generado y almacenado en el sistema.",
    "export_deleted"                    => "La exportación :old_value se ha  eliminado del sistema.",
    "user_export_generated"             => "La exportación :new_value del usuario :rel se ha generado y almacenado en el sistema.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Se han actualizado sus plantillas de respuesta.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Se ha eliminado el archivo adjunto ':old_value' del ticket #:rel.",
    "user_added_to_group"               => "Se ha añadido el usuario :rel al grupo de usuarios :new_value.",
    "user_removed_from_group"           => "Se ha eliminado el usuario :rel del grupo de usuarios :old_value.",
    "operator_added_to_group"           => "Se ha añadido el operador :rel al grupo de operadores :new_value.",
    "operator_removed_from_group"       => "Se ha elminado el operador :rel del grupo de operadores :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Se ha eliminado la tarea en segundo plano :rel.",
    "background_job_retried"            => "Se volvió a intentar la tarea en segundo plano :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Establecer una contraseña para su cuenta.",
    "password_reset_sent"               => "Se ha enviado el enlace para restablecer la contraseña a :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Ticket #:rel calificado como :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Se ha guardado :extra_rel1 en el ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Se ha guardado :extra_rel1 en el artículo :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => ":extra_rel1 fijado en el ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => ":extra_rel1 desfijado en el ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Se han actualizado las preferencias de notificaciones de :rel", // Updated Joe Blog's notification preferences.

);
