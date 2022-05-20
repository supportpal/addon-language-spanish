<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use DB;

use function array_merge;
use function file_get_contents;
use function now;

class SeedEmailTemplateDataTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation(1, ['subject' => '(#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(2, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(3, ['subject' => '(#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(4, ['subject' => '(#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(5, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(6, ['subject' => 'Confirmación del restablecimiento de la contraseña']);
        $this->createTranslation(7, ['subject' => 'IP baneada debido a intentos fallidos de inicio de sesión']);
        $this->createTranslation(9, ['subject' => 'Solicitud del restablecimiento de la contraseña']);
        $this->createTranslation(10, ['subject' => 'Respuesta publicada a tu comentario']);
        $this->createTranslation(11, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(12, ['subject' => 'Tu cuenta del servicio de asistencia ha sido creada']);
        $this->createTranslation(13, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(14, ['subject' => 'Intento de inicio de sesión fallido en el panel del operador']);
        $this->createTranslation(15, ['subject' => 'Nuevo mensaje interno de {{ private.user.formatted_name }}']);
        $this->createTranslation(16, ['subject' => 'Cuenta del help desk creada']);
        $this->createTranslation(17, ['subject' => 'Nuevo comentario publicado']);
        $this->createTranslation(18, ['subject' => '(#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(19, ['subject' => '(#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(20, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(21, ['subject' => 'RE: {{ oSubject }}']);
        $this->createTranslation(22, ['subject' => 'Confirmación de la cuenta']);
        $this->createTranslation(23, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(24, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(25, ['subject' => '(#{{ ticket.number }}) ¿Cómo calificarías el soporte recibido?']);
        $this->createTranslation(26, ['subject' => 'Cuenta de usuario creada']);
        $this->createTranslation(27, ['subject' => 'RE: {{ oSubject }}']);
        $this->createTranslation(28, ['subject' => 'RE: {{ oSubject }}']);
        $this->createTranslation(29, ['subject' => 'RE: (#{{ ticket.number }}) {{ ticket.subject }}']);
        $this->createTranslation(30, ['subject' => 'Exportación de usuarios lista']);
        $this->createTranslation(31, ['subject' => 'Dirección de correo electrónico actualizada']);
        $this->createTranslation(32, ['subject' => 'Confirmación de tu nueva dirección de correo electrónico']);
    }

    /**
     * @param int $templateId
     * @param array<string, string> $translation
     */
    private function createTranslation(int $templateId, array $translation): void
    {
        $record = DB::table('email_template_data')
            ->where('template_id', $templateId)
            ->whereNull('brand_id')
            ->where('language_code', 'es')
            ->first();
        if ($record !== null) {
            return;
        }

        $time = now()->getTimestamp();

        DB::table('email_template_data')->insertOrIgnore(array_merge([
            'template_id'   => $templateId,
            'brand_id'      => null,
            'language_code' => 'es',
            'contents'      => file_get_contents(__DIR__ . '/emails/template_' . $templateId . '.twig'),
            'created_at'    => $time,
            'updated_at'    => $time
        ], $translation));
    }
}
