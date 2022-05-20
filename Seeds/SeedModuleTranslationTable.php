<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedModuleTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createModuleTranslation('Core', 'Núcleo');
        $this->createModuleTranslation('User', 'Usuario');
        $this->createModuleTranslation('Ticket', 'Ticket');
        $this->createModuleTranslation('Selfservice', 'Auto-servicio');
        $this->createModuleTranslation('Report', 'Informe');
    }

    private function createModuleTranslation(string $slug, string $translation): void
    {
        $module = DB::table('module')->where('slug', '=', $slug)->first();
        if ($module === null) {
            return;
        }

        DB::table('module_translation')->insertOrIgnore([
            'module_id' => $module->id,
            'name'      => $translation,
            'locale'    => 'es',
        ]);
    }
}
