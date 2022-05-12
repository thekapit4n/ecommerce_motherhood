<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackageType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `mmy_staging`.`tbl_webinar_workshop_package` 
            CHANGE COLUMN `type` `type` ENUM('one_time', 'weekly', 'monthly', 'quarterly', 'half_yearly', 'annually')
            NOT NULL DEFAULT 'one_time' ;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
