<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedUserGroupTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = DB::table('user_group')
            ->where('administrator', '=', 1)
            ->orderBy('id')
            ->first();
        if ($group === null) {
            return;
        }

        DB::table('user_group_translation')->insertOrIgnore([
            'user_group_id' => $group->id,
            'name'          => 'Administradores del sistema',
            'description'   => 'Grupo por defecto para administradores, siempre tiene todos los permisos.',
            'locale'        => 'es',
        ]);
    }
}
