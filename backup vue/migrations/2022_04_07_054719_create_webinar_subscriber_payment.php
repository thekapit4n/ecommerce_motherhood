<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarSubscriberPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_subscriber_payment'))
        {
            Schema::connection('mysql')->create('tbl_webinar_subscriber_payment', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'id_webinar_subscriber_payment')){
                    $table->bigIncrements('id_webinar_subscriber_payment');
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'id_subscriber')){
                    $table->bigInteger('id_subscriber');
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'id_customer')){
                    $table->bigInteger('id_customer');
                }   
                
                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'id_order')){
                    $table->bigInteger('id_order');
                }  
                            
                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'id_plan')){
                    $table->string('id_plan')->default(NULL)->nullable();
                } 
                               
                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'amount')){
                    $table->double('amount', 8, 2)->default(0.00);
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'transactionId')){
                    $table->string('transactionId')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'appcode')){
                    $table->string('appcode')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'active')){
                    $table->tinyInteger('active');
                } 

                if (!Schema::hasColumn('tbl_webinar_subscriber_payment', 'created_at')){
                    $table->timestamps();
                }
            });

            DB::statement(" ALTER TABLE `tbl_webinar_workshop_subscriber` 
                ADD COLUMN `id_order_subscribe` BIGINT(20) NULL AFTER `id_product`,
                ADD COLUMN `id_plan` VARCHAR(255) NULL AFTER `id_order_subscribe`;
            ");
      
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('tbl_webinar_subscriber_payment');
    }
}
