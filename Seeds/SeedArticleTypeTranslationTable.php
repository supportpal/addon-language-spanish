<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Seeds;

use App\Modules\Core\Controllers\Database\Seed\Seeder;
use Illuminate\Support\Facades\DB;

use function array_merge;
use function getSlug;

class SeedArticleTypeTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTranslation('Announcements', [
            'name'        => 'Anuncios',
            'slug'        => getSlug('Anuncios'),
            'description' => 'Ver las últimas noticias y anuncios',
        ]);

        $this->createTranslation('Knowledgebase', [
            'name'        => 'Base de datos',
            'slug'        => getSlug('Base de datos'),
            'description' => 'Examina la base de datos para encontrar respuestas a las preguntas más comunes.',
        ]);
    }

    /**
     * @param string $name
     * @param array<string, string> $translation
     */
    private function createTranslation(string $name, array $translation): void
    {
        $record = DB::table('article_type')->where('name', '=', $name)->orderBy('id')->first();
        if ($record === null) {
            return;
        }

        DB::table('article_type_translation')->insertOrIgnore(array_merge([
            'type_id' => $record->id,
            'locale'  => 'es',
        ], $translation));
    }
}
