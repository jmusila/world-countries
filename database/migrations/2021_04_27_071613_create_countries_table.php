<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alpha2_code')->nullable();
            $table->string('alpha3_code')->nullable();
            $table->string('capital_city')->nullable();
            $table->string('region')->nullable();
            $table->string('sub_region')->nullable();
            $table->string('timezone')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_flag')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('countries');
    }
}
