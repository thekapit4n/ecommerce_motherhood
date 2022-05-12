<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWebinarSubcribeActionLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_subscriber_action_log'))
        {
            Schema::connection('mysql')->create('tbl_webinar_subscriber_action_log', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'id_webinar_subscriber_log')){
                    $table->bigIncrements('id_webinar_subscriber_log');
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'id_subscriber')){
                    $table->bigInteger('id_subscriber');
                }

                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'id_employee')){
                    $table->bigInteger('id_employee');
                }   
                
                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'action')){
                    $table->string('action')->default(NULL)->nullable();
                }  
                            
                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'action_result')){
                    $table->longtext('action_result')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'action_param')){
                    $table->longtext('action_param')->default(NULL)->nullable();
                } 

                if (!Schema::hasColumn('tbl_webinar_subscriber_action_log', 'created_at')){
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
        Schema::connection('mysql')->dropIfExists('tbl_webinar_subscriber_action_log');
    }
}
