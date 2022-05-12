<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridgeTblWorkshopPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_workshop_package'))
        {
            Schema::connection('mysql')->create('tbl_webinar_workshop_package', function (Blueprint $table) 
            {
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_workshop_package')){
                    $table->bigIncrements('id_workshop_package');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_webinar_workshop')){
                  $table->bigInteger('id_webinar_workshop');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_webinar_package')){
                    $table->bigInteger('id_webinar_package');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_product')){
                    $table->bigInteger('id_product');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        DB::statement(" ALTER TABLE `tbl_webinar_workshop_subscriber` 
            CHANGE COLUMN `workshop_desc` `workshop_full_desc` LONGTEXT NULL DEFAULT NULL ;"
        );
        
        DB::statement("ALTER TABLE `tbl_webinar_workshop_package` 
            ADD COLUMN `package_previous_price` DOUBLE(8,2) NULL DEFAULT '0.00' AFTER `package_name`,
            ADD COLUMN `package_next_price` DOUBLE(8,2) NULL DEFAULT '0.00' AFTER `package_price`,
            ADD COLUMN `package_desc` LONGTEXT NULL AFTER `package_name`,
            ADD COLUMN `package_renewal_desc` TEXT NULL AFTER `package_desc`,
            ADD COLUMN `package_category` ENUM('standard', 'premium') NULL DEFAULT 'standard' AFTER `package_next_price`,
            CHANGE COLUMN `type` `type` ENUM('one_time', 'weekly', 'monthly', 'quarterly', 'half_yearly', 'annually')
            NOT NULL DEFAULT 'one_time',
            DROP COLUMN `id_product`
             ;
            "
        );
       
        DB::statement("ALTER TABLE `tbl_webinar_workshop_subscriber` 
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
        Schema::dropIfExists('bridge_tbl_workshop_package');
    }
}
