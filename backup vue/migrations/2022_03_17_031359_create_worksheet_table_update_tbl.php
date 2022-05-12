<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksheetTableUpdateTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_library'))
        {
            Schema::connection('mysql')->create('tbl_webinar_library', function (Blueprint $table) 
            {
                if (!Schema::hasColumn('tbl_webinar_library', 'id_webinar_library')){
                    $table->bigIncrements('id_webinar_library');
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'id_webinar')){
                    $table->bigInteger('id_webinar');
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'library_title')){
                    $table->string('library_title')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_library', 'library_full_desc')){
                    $table->longtext('library_full_desc')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_library', 'library_short_desc')){
                    $table->text('library_short_desc')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'library_mobile_img_url')){
                    $table->text('library_mobile_img_url')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_library', 'library_desktop_img_url')){
                    $table->text('library_desktop_img_url')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_library', 'library_document_url')){
                    $table->text('library_document_url')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'library_type')){
                    $table->enum('library_type', ['worksheet', 'activity_videos'])->default('worksheet');
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'library_status')){
                    $table->enum('library_status', ['active', 'inactive'])->default('active');
                }

                if (!Schema::hasColumn('tbl_webinar_library', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        DB::statement("ALTER TABLE `tbl_webinar_workshop` 
            ADD COLUMN `workshop_short_desc` TEXT NULL AFTER `workshop_name`,
            ADD COLUMN `workshop_facilitator_bio` TEXT NULL AFTER `workshop_facilitator`,
            ADD COLUMN `workshop_number_attendance_min` INT NULL DEFAULT 1 AFTER `workshop_facilitator_bio`,
            ADD COLUMN `workshop_number_attendance_max` INT NULL AFTER `workshop_number_attendance_min`,
            ADD COLUMN `workshop_age_min` INT NULL AFTER `workshop_number_attendance_max`,
            ADD COLUMN `workshop_age_max` INT NULL AFTER `workshop_age_min`,
            ADD COLUMN `workshop_organizer_name` VARCHAR(255) NULL AFTER `workshop_nature`,
            ADD COLUMN `workshop_url_class` VARCHAR(255) NULL AFTER `workshop_organizer_name`,
            CHANGE COLUMN `workshop_desc` `workshop_full_desc` LONGTEXT NULL DEFAULT NULL ,
            CHANGE COLUMN `workshop_facilitator` `workshop_facilitator` VARCHAR(255) NULL DEFAULT NULL ;"
        );
        
        DB::statement("ALTER TABLE `tbl_webinar_workshop_subscriber` 
                ADD COLUMN `workshop_short_desc` TEXT NULL AFTER `workshop_desc`,
                ADD COLUMN `workshop_facilitator_bio` TEXT NULL AFTER `workshop_facilitator`,
                ADD COLUMN `workshop_number_attendance_min` INT NULL AFTER `workshop_facilitator_bio`,
                ADD COLUMN `workshop_number_attendance_max` INT NULL AFTER `workshop_number_attendance_min`,
                ADD COLUMN `workshop_age_min` INT NULL AFTER `workshop_number_attendance_max`,
                ADD COLUMN `workshop_age_max` INT NULL AFTER `workshop_age_min`,
                ADD COLUMN `workshop_organizer_name` VARCHAR(255) NULL AFTER `workshop_nature`,
                ADD COLUMN `workshop_url_class` VARCHAR(255) NULL AFTER `workshop_organizer_name`;
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
        Schema::connection('mysql')->dropIfExists('tbl_webinar_library');
    }
}
