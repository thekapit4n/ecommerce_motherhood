<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackageSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `mmy_staging`.`tbl_webinar_workshop_package` 
            ADD COLUMN `package_desc` LONGTEXT NULL AFTER `package_name`,
            ADD COLUMN `package_renewal_desc` TEXT NULL AFTER `package_desc`,
            ADD COLUMN `package_category` ENUM('standard', 'premium') NULL DEFAULT 'standard' AFTER `package_next_price`;
            "
        ); 
        
        DB::statement("ALTER TABLE `mmy_staging`.`tbl_webinar_workshop_subscriber` 
            ADD COLUMN `package_desc` LONGTEXT NULL AFTER `package_name`,
            ADD COLUMN `package_renewal_desc` TEXT NULL AFTER `package_desc`,
            ADD COLUMN `package_previous_price` DOUBLE(8,2) NULL AFTER `package_renewal_desc`,
            ADD COLUMN `package_next_price` DOUBLE(8,2) NULL AFTER `package_price`,
            ADD COLUMN `package_category` VARCHAR(255) NULL AFTER `package_next_price`;
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
        //
    }
}
