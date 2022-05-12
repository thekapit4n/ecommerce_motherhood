<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableWebinarSubscriberPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  DB::statement("ALTER TABLE `tbl_webinar_workshop_subscriber` 
                DROP COLUMN `package_type`,
                DROP COLUMN `package_category`,
                DROP COLUMN `workshop_url_class`,
                DROP COLUMN `workshop_organizer_name`,
                DROP COLUMN `workshop_nature`,
                DROP COLUMN `workshop_status`,
                DROP COLUMN `workshop_end_date`,
                DROP COLUMN `workshop_start_date`,
                DROP COLUMN `workshop_desktop_img_url`,
                DROP COLUMN `workshop_mobile_img_url`,
                DROP COLUMN `workshop_age_max`,
                DROP COLUMN `workshop_age_min`,
                DROP COLUMN `workshop_number_attendance_max`,
                DROP COLUMN `workshop_number_attendance_min`,
                DROP COLUMN `workshop_facilitator_bio`,
                DROP COLUMN `workshop_facilitator`,
                DROP COLUMN `workshop_short_desc`,
                DROP COLUMN `workshop_full_desc`,
                DROP COLUMN `workshop_name`,
                DROP COLUMN `id_webinar_workshop`,
                ADD COLUMN `webinar_package_currency` INT NULL AFTER `id_webinar_package`,
                ADD COLUMN `current_recurring` INT(11) NULL AFTER `package_next_price`,
                ADD COLUMN `recurring_count` INT(11) NULL AFTER `current_recurring`,
                ADD COLUMN `last_recurring_xml` LONGTEXT NULL AFTER `recurring_interval`,
                ADD COLUMN `recurring_type` INT(11) NULL AFTER `next_charge_date`,
                ADD COLUMN `recurring_unique_id` VARCHAR(45) NULL AFTER `recurring_type`,
                ADD COLUMN `active` TINYINT(1) NULL AFTER `recurring_unique_id`,
                ADD COLUMN `bundle_shipping` DOUBLE(8,2) NULL AFTER `active`,
                ADD COLUMN `bundle_shipping_notax` DOUBLE(8,2) NULL AFTER `bundle_shipping`,
                ADD COLUMN `deliver_company` VARCHAR(255) NULL AFTER `deliver_alias`,
                ADD COLUMN `deliver_vat_number` VARCHAR(255) NULL AFTER `deliver_phone_mobile`,
                ADD COLUMN `id_billing` INT NULL AFTER `deliver_vat_number`,
                ADD COLUMN `id_billing_state` INT NULL AFTER `id_billing`,
                ADD COLUMN `id_billing_country` INT NULL AFTER `id_billing_state`,
                ADD COLUMN `billing_alias` VARCHAR(255) NULL AFTER `id_billing_country`,
                ADD COLUMN `billing_company` VARCHAR(255) NULL AFTER `billing_alias`,
                ADD COLUMN `billing_address1` VARCHAR(255) NULL AFTER `billing_company`,
                ADD COLUMN `billing_address2` VARCHAR(255) NULL AFTER `billing_address1`,
                ADD COLUMN `billing_postcode` VARCHAR(255) NULL AFTER `billing_address2`,
                ADD COLUMN `billing_city` VARCHAR(255) NULL AFTER `billing_postcode`,
                ADD COLUMN `billing_other` TEXT NULL AFTER `billing_city`,
                ADD COLUMN `billing_phone_number` VARCHAR(255) NULL AFTER `billing_other`,
                ADD COLUMN `billing_vat_number` VARCHAR(255) NULL AFTER `billing_phone_number`,
                CHANGE COLUMN `id_product` `id_product` BIGINT(20) NOT NULL AFTER `webinar_package_order_id`,
                CHANGE COLUMN `id_customer` `id_customer` BIGINT(20) NOT NULL AFTER `webinar_package_currency`,
                CHANGE COLUMN `id_deliver_state` `id_deliver_state` BIGINT(20) NOT NULL AFTER `deliver_city`,
                CHANGE COLUMN `id_subscriber` `id_subscribe` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT ;
        "); */
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
