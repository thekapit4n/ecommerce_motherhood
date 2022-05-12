<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFoodNutritions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_food_nutritions'))
        {
            Schema::connection('mysql')->create('tbl_food_nutritions', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_food_nutritions', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'position')){
                    $table->integer('position')->default(0)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'post_id')){
                    $table->integer('post_id')->default(NULL)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'category')){
                    $table->string('category')->default(NULL)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'display_icon')){
                    $table->string('display_icon')->default('/icons/food-nutritions/grains.svg')->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'display_name')){
                    $table->string('display_name')->default(NULL)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'post_status')){
                    $table->tinyInteger('post_status')->default(1);
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'title')){
                    $table->longtext('title')->default(NULL)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'content')){
                    $table->longtext('content')->default(NULL)->nullable();
                }
                if (!Schema::hasColumn('tbl_food_nutritions', 'created_at')){
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
        Schema::connection('mysql')->dropIfExists('tbl_food_nutritions');
    }
}
