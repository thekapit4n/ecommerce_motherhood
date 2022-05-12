<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblWorkshopPackageSubscriber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_workshop'))
        {
            Schema::connection('mysql')->create('tbl_webinar_workshop', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar_workshop', 'id_webinar_workshop')){
                    $table->bigIncrements('id_webinar_workshop');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop', 'id_webinar')){
                    $table->bigInteger('id_webinar');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_name')){
                    $table->string('workshop_name')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_desc')){
                    $table->longtext('workshop_desc')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_facilitator')){
                    $table->string('workshop_facilitator')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_mobile_img_url')){
                    $table->text('workshop_mobile_img_url')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_dekstop_img_url')){
                    $table->text('workshop_desktop_img_url')->default(NULL)->nullable();
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_start_date')){
                    $table->dateTime('workshop_start_date');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_end_date')){
                    $table->dateTime('workshop_end_date');
                }
                
                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_status')){
                    $table->enum('workshop_status', ['active', 'inactive'])->default('active');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop', 'workshop_nature')){
                    $table->enum('workshop_nature', ['free', 'premium'])->default('premium');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop', 'created_at')){
                    $table->timestamps();
                }
            });
        }
        
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_workshop_package'))
        {
            Schema::connection('mysql')->create('tbl_webinar_workshop_package', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_webinar_package')){
                    $table->bigIncrements('id_webinar_package');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_webinar')){
                    $table->bigInteger('id_webinar');
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_webinar_workshop')){
                    $table->bigInteger('id_webinar_workshop');
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'id_product')){
                    $table->bigInteger('id_product');
                }
                
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'package_name')){
                    $table->string('package_name')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'package_price')){
                    $table->double('package_price', 8, 2)->default(0.00);
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'package_status')){
                    $table->enum('status', ['active', 'inactive'])->default('active');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'package_type')){
                    $table->enum('type', ['one_time', 'weekly', 'monthly', 'annually'])->default('one_time');
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_package', 'created_at')){
                    $table->timestamps();
                }
            });
        }
        
        if(!Schema::connection('mysql')->hasTable('tbl_webinar_workshop_subscriber'))
        {
            Schema::connection('mysql')->create('tbl_webinar_workshop_subscriber', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_subscriber')){
                    $table->bigIncrements('id_subscriber');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_webinar')){
                    $table->bigInteger('id_webinar');
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_webinar_workshop')){
                    $table->bigInteger('id_webinar_workshop');
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_webinar_package')){
                    $table->bigInteger('id_webinar_package');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_product')){
                    $table->bigInteger('id_product');
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_customer')){
                    $table->bigInteger('id_customer');
                }
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'webinar_name')){
                    $table->string('webinar_name')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_name')){
                    $table->string('workshop_name')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_desc')){
                    $table->longtext('workshop_desc')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_facilitator')){
                    $table->string('workshop_facilitator')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_mobile_img_url')){
                    $table->text('workshop_mobile_img_url')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_dekstop_img_url')){
                    $table->text('workshop_desktop_img_url')->default(NULL)->nullable();
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_start_date')){
                    $table->dateTime('workshop_start_date');
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_end_date')){
                    $table->dateTime('workshop_end_date');
                }
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_status')){
                    $table->string('workshop_status')->default(NULL)->nullable();
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'workshop_nature')){
                    $table->string('workshop_nature')->default(NULL)->nullable();
                }
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'package_name')){
                    $table->string('package_name')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'package_price')){
                    $table->double('package_price', 8, 2)->default(0.00);
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'package_type')){
                    $table->string('package_type')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'recurring_interval')){
                    $table->bigInteger('recurring_interval');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'last_charge_date')){
                    $table->dateTime('last_charge_date');
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'next_charge_date')){
                    $table->dateTime('next_charge_date');
                }

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_deliver')){
                    $table->bigInteger('id_deliver');
                }
                                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_alias')){
                    $table->string('deliver_alias')->default(NULL)->nullable();
                }   
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_address1')){
                    $table->string('deliver_address1')->default(NULL)->nullable();
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_address2')){
                    $table->string('deliver_address2')->default(NULL)->nullable();
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_postcode')){
                    $table->string('deliver_postcode')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_city')){
                    $table->string('deliver_city')->default(NULL)->nullable();
                } 
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_deliver_country')){
                    $table->bigInteger('id_deliver_country');
                }   
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'id_deliver_state')){
                    $table->bigInteger('id_deliver_state');
                }  
                
                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'deliver_phone_mobile')){
                    $table->string('deliver_phone_mobile')->default(NULL)->nullable();
                } 

                if (!Schema::hasColumn('tbl_webinar_workshop_subscriber', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        DB::statement("ALTER TABLE`tbl_webinar` 
            ADD COLUMN `webinar_name` VARCHAR(255) NULL AFTER `id_webinar`,
            ADD COLUMN `webinar_mobile_img_url` TEXT NULL NULL AFTER `type`,
            ADD COLUMN `webinar_dekstop_img_url` TEXT NULL AFTER `webinar_mobile_img_url`;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('tbl_webinar_workshop');
        Schema::connection('mysql')->dropIfExists('tbl_webinar_workshop_package');
        Schema::connection('mysql')->dropIfExists('tbl_webinar_workshop_subscriber');
    }
}
