<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

use function array_merge;

class SeedScheduleTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Default', [
            'name'        => 'Por defecto',
            'description' => 'Horario por defecto para el Help Desk',
        ]);
    }

    /**
     * @param string $name
     * @param array<string, string> $translation
     */
    private function createTranslation(string $name, array $translation): void
    {
        $record = DB::table('schedule')->where('name', '=', $name)->orderBy('id')->first();
        if ($record === null || ! isset($record->id)) {
            return;
        }

        DB::table('schedule_translation')->insertOrIgnore(array_merge([
            'schedule_id' => $record->id,
            'locale'      => 'es',
        ], $translation));
    }
}
