<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedTicketPriorityTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Low', 'Baja');
        $this->createTranslation('Medium', 'Media');
        $this->createTranslation('High', 'Alta');
        $this->createTranslation('Critical', 'Crítica');
    }

    private function createTranslation(string $name, string $translation): void
    {
        $priority = DB::table('ticket_priority')->where('name', '=', $name)->orderBy('id')->first();
        if ($priority === null || ! isset($priority->id)) {
            return;
        }

        DB::table('ticket_priority_translation')->insertOrIgnore([
            'priority_id' => $priority->id,
            'name'        => $translation,
            'locale'      => 'es',
        ]);
    }
}
