<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

use function array_merge;

class SeedDepartmentTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Support', [
            'name'        => 'Asistencia',
            'description' => 'Este es un departamento generado automáticamente. Por favor, edítame.'
        ]);
    }

    /**
     * @param string $name
     * @param array<string, string> $translation
     */
    private function createTranslation(string $name, array $translation): void
    {
        $record = DB::table('department')->where('name', '=', $name)->orderBy('id')->first();
        if ($record === null) {
            return;
        }

        DB::table('department_translation')->insertOrIgnore(array_merge([
            'department_id' => $record->id,
            'locale'        => 'es',
        ], $translation));
    }
}
