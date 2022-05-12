<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar'))
        {
            Schema::connection('mysql')->create('tbl_webinar', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar', 'id_webinar')){
                    $table->bigIncrements('id_webinar');
                }

                if (!Schema::hasColumn('tbl_webinar', 'type')){
                    $table->enum('type', ['option1', 'option2'])->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar', 'status')){
                    $table->enum('status', ['active', 'inactive'])->default('active')->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar', 'start_date')){
                    $table->dateTime('start_date');
                }
                
                if (!Schema::hasColumn('tbl_webinar', 'end_date')){
                    $table->dateTime('end_date');
                }

                if (!Schema::hasColumn('tbl_webinar', 'created_at')){
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
        Schema::connection('mysql')->dropIfExists('tbl_webinar');
        
    }
}
