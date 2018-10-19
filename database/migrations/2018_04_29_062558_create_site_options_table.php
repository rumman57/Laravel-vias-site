<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('home_bg_img')->nullable();
            $table->string('contact_bg_img')->nullable();
            $table->string('about_bg_img')->nullable();
            $table->string('faq_bg_img')->nullable();
            $table->string('ongoing_bg_img')->nullable();
            $table->string('apply_bg_img')->nullable();
            $table->string('gc_bg_img')->nullable();
            $table->string('tmn_bg_img')->nullable();

            $table->string('copyright_left')->nullable();
            $table->string('copyright_left_az')->nullable();
            $table->string('copyright_left_ru')->nullable();
            $table->string('copyright_left_ar')->nullable();
            $table->string('copyright_left_tr')->nullable();

            $table->string('copyright_right')->nullable();
            $table->string('copyright_right_az')->nullable(); 
            $table->string('copyright_right_ru')->nullable();
            $table->string('copyright_right_ar')->nullable();
            $table->string('copyright_right_tr')->nullable();

            $table->integer('total_aplctns')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_options');
    }
}
