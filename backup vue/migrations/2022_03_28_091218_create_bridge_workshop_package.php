<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridgeWorkshopPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_bridge_workshop_package'))
        {
            Schema::connection('mysql')->create('tbl_webinar_bridge_workshop_package', function (Blueprint $table) 
            {
                if (!Schema::hasColumn('tbl_webinar_bridge_workshop_package', 'id_workshop_package')){
                    $table->bigIncrements('id_workshop_package');
                }

                if (!Schema::hasColumn('tbl_webinar_bridge_workshop_package', 'id_webinar_workshop')){
                   $table->bigInteger('id_webinar_workshop');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_bridge_workshop_package', 'id_webinar_package')){
                    $table->bigInteger('id_webinar_package');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_bridge_workshop_package', 'id_product')){
                    $table->bigInteger('id_product');
                }

                if (!Schema::hasColumn('tbl_webinar_bridge_workshop_package', 'created_at')){
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
        Schema::connection('mysql')->dropIfExists('tbl_webinar_bridge_workshop_package');
    }
}
