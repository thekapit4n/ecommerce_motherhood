<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackageTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `mmy_staging`.`tbl_webinar_workshop_package` 
                    ADD COLUMN `package_previous_price` DOUBLE(8,2) NULL DEFAULT '0.00' AFTER `package_name`,
                    ADD COLUMN `package_next_price` DOUBLE(8,2) NULL DEFAULT '0.00' AFTER `package_price`;;
                    "
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
