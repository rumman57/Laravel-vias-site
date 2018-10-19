<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->integer('ordinary')->default(1);
            $table->integer('diplomatic')->default(1);
            $table->integer('service')->default(1);
            $table->integer('special')->default(1);
            $table->integer('stateless')->default(1);
            $table->integer('official')->default(1);
            $table->integer('days')->default(90);
            $table->integer('is_partial_exempt')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn(['ordinary', 'diplomatic', 'service','special','stateless','official','days','is_partial_exempt']);
        });
    }
}
