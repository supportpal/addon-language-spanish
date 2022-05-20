<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

class SeedRoleTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = DB::table('role')->where('slug', '=', 'administrator')->orderBy('id')->first();
        if ($role === null) {
            return;
        }

        DB::table('role_translation')->insertOrIgnore([
            'role_id'     => $role->id,
            'name'        => 'Administrador',
            'description' => 'Todos los permisos',
            'locale'      => 'es',
        ]);
    }
}
