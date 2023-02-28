<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_visas', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->string('visa_title');
            $table->string('visa_cost');
            $table->string('visa_type');
            $table->string('visa_short_desc');
            $table->string('visa_rating');
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
        Schema::dropIfExists('country_visas');
    }
}
