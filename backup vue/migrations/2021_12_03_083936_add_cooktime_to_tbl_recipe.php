<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCooktimeToTblRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::connection('mysql')->hasTable('tbl_recipe'))
        {
            Schema::table('tbl_recipe', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_recipe', 'cook_time')){
                    $table->string('cook_time')->nullable()->after('post_content');
                }
                if (!Schema::hasColumn('tbl_recipe', 'author_name')){
                    $table->string('author_name')->nullable()->after('post_content');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->table('tbl_recipe', function (Blueprint $table) {
            $table->dropcolumn('cook_time');
            $table->dropcolumn('author_name');
        });
    }
}
