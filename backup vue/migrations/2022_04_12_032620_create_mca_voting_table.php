<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcaVotingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::connection('mysql')->hasTable('tbl_vote_event'))
        {
            Schema::create('tbl_vote_event', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_vote_event', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_vote_event', 'name')){
                    $table->string('name');
                }
                if (!Schema::hasColumn('tbl_vote_event', 'start_date')){
                    $table->dateTime('start_date')->nullable();
                } 
                if (!Schema::hasColumn('tbl_vote_event', 'end_date')){
                    $table->dateTime('end_date')->nullable();
                } 
                if (!Schema::hasColumn('tbl_vote_event', 'status')){
                    $table->enum('status', ['active', 'inactive']);
                }
                if (!Schema::hasColumn('tbl_mca_category', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        if(!Schema::connection('mysql')->hasTable('tbl_vote_category'))
        {
            Schema::create('tbl_vote_category', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_vote_category', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_vote_category', 'name')){
                    $table->string('name');
                }
                if (!Schema::hasColumn('tbl_vote_category', 'type')){
                    $table->enum('type', ['main', 'sub']);
                }
                if (!Schema::hasColumn('tbl_vote_category', 'main_id')){
                    $table->integer('main_id')->nullable();
                } 
                if (!Schema::hasColumn('tbl_vote_category', 'vote_event_id')){
                    $table->integer('vote_event_id');
                } 
                if (!Schema::hasColumn('tbl_vote_category', 'status')){
                    $table->integer('status')->default(1);
                } 
                if (!Schema::hasColumn('tbl_vote_category', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        if(!Schema::connection('mysql')->hasTable('tbl_vote_product'))
        {
            Schema::create('tbl_vote_product', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_vote_product', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_vote_product', 'name')){
                    $table->string('name');
                }
                if (!Schema::hasColumn('tbl_vote_product', 'image')){
                    $table->string('image')->nullable();
                }
                if (!Schema::hasColumn('tbl_vote_product', 'description')){
                    $table->longtext('description')->nullable();
                } 
                if (!Schema::hasColumn('tbl_vote_product', 'main_cat_id')){
                    $table->integer('main_cat_id');
                } 
                if (!Schema::hasColumn('tbl_vote_product', 'sub_cat_id')){
                    $table->integer('sub_cat_id');
                } 
                if (!Schema::hasColumn('tbl_vote_product', 'vote_event_id')){
                    $table->integer('vote_event_id');
                } 
                if (!Schema::hasColumn('tbl_vote_product', 'status')){
                    $table->integer('status')->default(1);
                } 
                if (!Schema::hasColumn('tbl_vote_product', 'created_at')){
                    $table->timestamps();
                }
            });
        }

        if(!Schema::connection('mysql')->hasTable('tbl_user_voting'))
        {
            Schema::create('tbl_user_voting', function (Blueprint $table) {
                if (!Schema::hasColumn('tbl_user_voting', 'id')){
                    $table->bigIncrements('id');
                }
                if (!Schema::hasColumn('tbl_user_voting', 'user_id')){
                    $table->integer('user_id')->nullable();
                }
                if (!Schema::hasColumn('tbl_user_voting', 'product_id')){
                    $table->integer('product_id');
                }
                if (!Schema::hasColumn('tbl_user_voting', 'comment')){
                    $table->string('comment')->nullable();
                } 
                if (!Schema::hasColumn('tbl_user_voting', 'vote_event_id')){
                    $table->integer('vote_event_id');
                } 
                if (!Schema::hasColumn('tbl_user_voting', 'created_at')){
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
        Schema::dropIfExists('tbl_user_voting');
        Schema::dropIfExists('tbl_vote_event');
        Schema::dropIfExists('tbl_vote_category');
        Schema::dropIfExists('tbl_vote_product');
    }
}
