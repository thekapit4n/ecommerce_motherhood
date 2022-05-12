<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_recipe'))
        {
            Schema::connection('mysql')->create('tbl_recipe', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_recipe', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_recipe', 'post_id')){
                    $table->bigInteger('post_id');
                }
                if (!Schema::hasColumn('tbl_recipe', 'post_content')){
                    $table->longText('post_content');
                }
                if (!Schema::hasColumn('tbl_recipe', 'created_at')){
                    $table->timestamps();
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
        Schema::connection('mysql')->dropIfExists('tbl_recipe');
    }
}
