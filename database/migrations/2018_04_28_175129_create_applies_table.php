<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('select_country');
            $table->string('document_type')->nullable();
            $table->string('processing_type')->nullable();
            $table->string('purpose_type')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('arrival_date2')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('applicant')->nullable();
            $table->integer('totalusd')->nullable();
            $table->string('person_surname')->nullable();
            $table->string('person_other_name')->nullable();
            $table->string('person_country_birth')->nullable();
            $table->string('person_occupation')->nullable();
            $table->string('country_phone_code')->nullable();
            $table->string('person_mobile_number')->nullable();
            $table->text('pemanent_residence_address')->nullable();
            $table->string('Email')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('Attach_file')->nullable();
            $table->text('person_residence_address')->nullable();
            $table->string('person_visits_check')->nullable();
            $table->string('person_reason')->nullable();
            $table->string('ref_number')->nullable();
            $table->integer('payment_complete')->default(1);
            $table->integer('application_complete')->default(1);
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
        Schema::dropIfExists('applies');
    }
}
