<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventMobileOrderToPsEventTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('ps_events'))
        {
            Schema::connection('mysql')->create('ps_events', function (Blueprint $table) {
                if (!Schema::hasColumn('ps_events', 'event_mobile_order')){
                    $table->integer('event_mobile_order')->nullable();
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
        Schema::connection('mysql')->table('ps_events', function (Blueprint $table) {
            $table->dropcolumn('event_mobile_order');
        });
    }
}
