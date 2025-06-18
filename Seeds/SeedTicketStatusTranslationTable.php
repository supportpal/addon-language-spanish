<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedTicketStatusTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Open', 'Abierto');
        $this->createTranslation('Closed', 'Cerrado');
        $this->createTranslation('Awaiting Reply', 'Esperando respuesta');
        $this->createTranslation('In-Progress', 'En curso');
    }

    private function createTranslation(string $name, string $translation): void
    {
        $status = DB::table('ticket_status')->where('name', '=', $name)->orderBy('id')->first();
        if ($status === null || ! isset($status->id)) {
            return;
        }

        DB::table('ticket_status_translation')->insertOrIgnore([
            'status_id' => $status->id,
            'name'      => $translation,
            'locale'    => 'es',
        ]);
    }
}
