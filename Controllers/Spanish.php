<?php declare(strict_types=1);

namespace Addons\Languages\Spanish\Controllers;

use Addons\Languages\Spanish\Seeds\SeedArticleTypeTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedDepartmentTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedEmailTemplateDataTable;
use Addons\Languages\Spanish\Seeds\SeedModuleTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedRoleTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedScheduledTaskTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedScheduleTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedTicketFilterTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedTicketPriorityTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedTicketStatusTranslationTable;
use Addons\Languages\Spanish\Seeds\SeedUserGroupTranslationTable;
use App\Modules\Core\Controllers\Languages\Language;

use function app;

class Spanish extends Language
{
    /**
     * Language identifier.
     */
    const IDENTIFIER = 'Spanish';

    /**
     * Initialise the language.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setIdentifier(self::IDENTIFIER);
    }

    /**
     * Languages can run an installation routine when they are activated. This will typically include adding default
     * values, initialising database tables and so on.
     *
     * @return boolean
     */
    public function activate()
    {
        // First install only.
        if ($this->installedVersion() !== null) {
            return true;
        }

        // Run the seeds.
        app()->make(SeedModuleTranslationTable::class)->run();
        app()->make(SeedRoleTranslationTable::class)->run();
        app()->make(SeedUserGroupTranslationTable::class)->run();
        app()->make(SeedTicketPriorityTranslationTable::class)->run();
        app()->make(SeedTicketStatusTranslationTable::class)->run();
        app()->make(SeedTicketFilterTranslationTable::class)->run();
        app()->make(SeedDepartmentTranslationTable::class)->run();
        app()->make(SeedScheduleTranslationTable::class)->run();
        app()->make(SeedScheduledTaskTranslationTable::class)->run();
        app()->make(SeedArticleTypeTranslationTable::class)->run();
        app()->make(SeedEmailTemplateDataTable::class)->run();

        return true;
    }

    /**
     * Deactivating serves as temporarily disabling the language, but the files still remain. This function should
     * typically clear any caches and temporary directories.
     *
     * @return boolean
     */
    public function deactivate()
    {
        return true;
    }

    /**
     * When a language is uninstalled, it should be completely removed as if it never was there. This function should
     * delete any created database tables, and any files created outside of the language directory.
     *
     * @return boolean
     */
    public function uninstall()
    {
        return true;
    }
}
