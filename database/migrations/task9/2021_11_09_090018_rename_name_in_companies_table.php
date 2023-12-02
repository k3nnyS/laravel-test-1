<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameInCompaniesTable extends Migration
{
    public static $TABLE_NAME = 'companies';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TASK: write the migration to rename the column "title" into "name"
        Schema::table(self::$TABLE_NAME, function (Blueprint $table) {
            // Write code here
            if(Schema::hasColumn(self::$TABLE_NAME, 'title')){
                $table->renameColumn('title', 'name');
            }
        });
        // PS: Had to add doctrine/dbal in composer.json. For more informations look at:
        // https://laracasts.com/discuss/channels/laravel/renaming-column-of-table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->renameColumn('name', 'title');
        });
    }
}
