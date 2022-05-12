<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderColumnTaxanomy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::connection('wpsql')->hasTable('wp_terms'))
        {
            Schema::connection('wpsql')->table('wp_terms', function (Blueprint $table) {
                if (!Schema::hasColumn('wp_terms', 'term_order')){
                    $table->string('term_order')->default(NULL)->nullable()->after('term_group');
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
        Schema::connection('wpsql')->table('wp_terms', function (Blueprint $table) {
            $table->dropcolumn('term_order');
        });
    }
}
