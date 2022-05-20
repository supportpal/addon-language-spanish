<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedTicketFilterTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Inbox', 'Bandeja de entrada');
        $this->createTranslation('Assigned to Me', 'Asignados a mí');
    }

    private function createTranslation(string $name, string $translation): void
    {
        $record = DB::table('ticket_filter')->where('name', '=', $name)->orderBy('id')->first();
        if ($record === null) {
            return;
        }

        DB::table('ticket_filter_translation')->insertOrIgnore([
            'filter_id' => $record->id,
            'name'      => $translation,
            'locale'    => 'es',
        ]);
    }
}
