<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

use function array_merge;

class SeedScheduledTaskTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ($this->isChannelEnabled('Twitter')) {
            $this->createTranslation('Check Twitter accounts', [
                'name'        => 'Comprobar cuentas de Twitter',
                'description' => 'Añade nuevos tweets con menciones y mensajes directos como tickets.',
            ]);
        }

        if ($this->isChannelEnabled('Facebook')) {
            $this->createTranslation('Check Facebook accounts', [
                'name'        => 'Comprobar cuentas de Facebook',
                'description' => 'Añade nuevos mensajes de la página de Facebook como tickets.',
            ]);
        }

        $this->createTranslation('Check email accounts', [
            'name'        => 'Comprobar cuentas de correo electrónico',
            'description' => 'Descargar correos a través de IMAP/POP3 y convertirlos en tickets.',
        ]);

        $this->createTranslation('Process ticket escalation rules', [
            'name'        => 'Procesar reglas de escalación del ticket',
            'description' => 'Comprueba si se han activado alguna regla de escalación y las procesa.',
        ]);

        $this->createTranslation('Process automatic ticket macros', [
            'name'        => 'Procesar macros de ticket automáticos',
            'description' => 'Comprueba si cualquier macro automático ahora se adapta a las condiciones en tickets no resueltos (en los que no se ha ejecutado previamente) y se ejecuta.',
        ]);

        $this->createTranslation('Process ticket follow ups', [
            'name'        => 'Procesar los seguimientos de los tickets',
            'description' => 'Comprueba el vencimiento de un seguimiento del ticket y si ejecuta las acciones.',
        ]);

        $this->createTranslation('Handle inactive tickets', [
            'name'        => 'Administrar tickets inactivos',
            'description' => 'Envía correos de espera de respuesta y cierra tickets que se han vuelto inactivos sin seguimiento del usuario.',
        ]);

        $this->createTranslation('Send ticket feedback forms', [
            'name'        => 'Enviar formularios de valoración del ticket',
            'description' => 'Envía formularios de valoración a usuarios con tickets resueltos.',
        ]);

        $this->createTranslation('Process email queue', [
            'name'        => 'Procesar cola de correos',
            'description' => 'Procesa correos pendientes en la cola esperando a ser enviados.',
        ]);

        $this->createTranslation('Process mass emails', [
            'name'        => 'Procesar correos masivos',
            'description' => 'Genera y añade correos a la cola de correos.',
        ]);

        $this->createTranslation('Generate exports', [
            'name'        => 'Generar exportaciones',
            'description' => 'Genera exportaciones de horarios y los almacena en el sistema de archivos.',
        ]);

        $this->createTranslation('Automatically delete old data, files and logs', [
            'name'        => 'Eliminar automáticamente información, archivos y registros antiguos',
            'description' => 'Elimina información de la base de datos, archivos y registros después de un determinado número de días, configurado a través de la página de la Limpieza del Sistema.',
        ]);

        $this->createTranslation('Update to the latest version', [
            'name'        => 'Actualizar a la última versión',
            'description' => 'Actualiza automáticamente el help desk a la última versión disponible.',
        ]);

        $this->createTranslation('Check for add-on updates', [
            'name'        => 'Buscar actualizaciones de complementos',
            'description' => 'Comprueba las actualizaciones disponibles para los complementos instalados del marketplace.',
        ]);
    }

    /**
     * @param string $name
     * @param array<string, string> $translation
     */
    private function createTranslation(string $name, array $translation): void
    {
        $record = DB::table('scheduled_task')->where('name', '=', $name)->orderBy('id')->first();
        if ($record === null) {
            return;
        }

        DB::table('scheduled_task_translation')->insertOrIgnore(array_merge([
            'scheduled_task_id' => $record->id,
            'locale'            => 'es',
        ], $translation));
    }

    private function isChannelEnabled(string $name): bool
    {
        return DB::table('ticket_channel')
            ->where('name', $name)
            ->where('enabled', 1)
            ->exists();
    }
}
